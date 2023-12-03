import requests
import main_functions
import nltk
nltk.download('punkt')
from nltk import word_tokenize
#nltk.download("stopwords")
from nltk.corpus import stopwords
from nltk.probability import FreqDist
import pandas as pd
import plotly.express as px
from wordcloud import WordCloud
import matplotlib.pyplot as plt
import streamlit as st

st.set_page_config(
        page_title="Project 1",
        page_icon="📰",
        layout="centered",
        initial_sidebar_state="expanded",
        menu_items={
            'Get Help': 'https://docs.streamlit.io/library/api-reference',
            'Report a bug': "https://docs.streamlit.io/library/api-reference",
            'About': "# This is Project 1 for COP 4813 - Prof. Gregory Reis"
        }
)

stopwordsEnglish = stopwords.words("english")

nyt_key = main_functions.read_from_file("JSON_Files/api_keys.json")
nyt_api = nyt_key["my_key"]

st.title("Project 1 - News App")

add_selectbox = st.sidebar.selectbox(
    "Select An Api",
    ["", "Top Stories", "Most Popular Articles"]
)

if add_selectbox == "":
    st.header("Please select an api")

elif add_selectbox == "Top Stories":
    st.header("Top Stories API")
    st.subheader("I - WordCloud")

    topic = st.selectbox("Choose a topic:",
                         options=["", "arts", "automobiles", "books", "business", "fashion", "food", "health", "home",
                                  "insider", "magazine",
                                  "movies", "nyregion", "opinion", "politics", "realestate", "science", "sports",
                                  "sundayreview", "technology", "theater", "t-magazine", "travel", "upshot", "us",
                                  "world"]
                         )

    if topic:
        url = "https://api.nytimes.com/svc/topstories/v2/{0}.json?api-key={1}".format(topic,nyt_api)
        response = requests.get(url).json()
        main_functions.save_to_file(response, "JSON_Files/articlesChosenByTheUser.json")
        articlesChosenByTheUser = main_functions.read_from_file("JSON_Files/articlesChosenByTheUser.json")

        abstracts = ""
        for i in articlesChosenByTheUser["results"]:
            abstracts = abstracts + i["abstract"]

        words = word_tokenize(abstracts)

        no_punkt = []
        for w in words:
            if w.isalpha():
                no_punkt.append(w)

        filtered_list = []
        for w in no_punkt:
            if w not in stopwordsEnglish:
                filtered_list.append(w)

        col1, col2 = st.columns(2)

        with col1:
            word_count = st.slider("Choose maximum number of words to display", 1, 200, 100)
            color_map = st.selectbox("Select a Color Map:",
                                     options= ["prism","viridis","plasma","magma","cividis","cool","spring"])
            background = st.color_picker("Choose a Background Color", "#000000")

        with col2:
            user_wordcloud = WordCloud(width=1000,
                                       height=1000,
                                       stopwords=stopwordsEnglish,
                                       max_words=word_count,
                                       colormap=color_map,
                                       background_color=background).generate(abstracts)

            fig, ax = plt.subplots()
            plt.imshow(user_wordcloud, interpolation='bilinear')
            plt.axis('off')
            st.pyplot(fig)

    st.subheader("II - Frequency Distribution")
    show_dist = st.checkbox("Click here to display Frequency Distribution Plot")
    if show_dist:
        word_num = st.slider("Choose the number of words", 1, 20, 10)
        freq_distribution = FreqDist(filtered_list)

        most_common_words = pd.DataFrame(freq_distribution.most_common(10))

        most_common = pd.DataFrame(
            {
                "words": most_common_words[0],
                "count": most_common_words[1]
            }
        )

        fig = px.histogram(most_common, x="words", y="count", title="Frequency Distribution", color="count")
        st.plotly_chart(fig)

elif add_selectbox == "Most Popular Articles":
    st.header("Most Popular Articles API")
    st.subheader("I - Comparing Most Shared, Viewed and Emailed Articles")

    nyt_key = main_functions.read_from_file("JSON_Files/api_keys.json")
    nyt_api = nyt_key["my_key"]

    article = st.selectbox("Choose a Preference Set:",
                     options=["", "shared", "emailed", "viewed"]
                     )

    age = st.selectbox("Select Article Age in Days:",
                     options=["", "1", "7", "30"]
                       )

    if article and age :
        url = "https://api.nytimes.com/svc/mostpopular/v2/{0}/{1}.json?api-key={2}".format(article, age, nyt_api)
        response = requests.get(url).json()
        main_functions.save_to_file(response, "JSON_Files/articleType.json")
        articleType = main_functions.read_from_file("JSON_Files/articleType.json")

        abstracts = ""
        for i in articleType["results"]:
            abstracts = abstracts + i["abstract"]

        words = word_tokenize(abstracts)

        no_punkt = []
        for w in words:
            if w.isalpha():
                no_punkt.append(w)

        filtered_list = []
        for w in no_punkt:
            if w not in stopwordsEnglish:
                filtered_list.append(w)

        col1, col2 = st.columns(2)

        with col1:
            word_count = st.slider("Choose maximum number of words to display", 1, 200, 100)
            color_map = st.selectbox("Select a Color Map:",
                                     options=["prism", "viridis", "plasma", "magma", "cividis", "cool", "spring"])
            background = st.color_picker("Choose a Background Color", "#000000")

        with col2:
            user_wordcloud = WordCloud(width=1000,
                                       height=1000,
                                       stopwords=stopwordsEnglish,
                                       max_words=word_count,
                                       colormap=color_map,
                                       background_color=background).generate(abstracts)

            fig, ax = plt.subplots()
            plt.imshow(user_wordcloud, interpolation='bilinear')
            plt.axis('off')
            st.pyplot(fig)

        st.subheader("II - Frequency Distribution")
        show_dist = st.checkbox("Click here to display Frequency Distribution Plot")
        if show_dist:
            word_num = st.slider("Choose the number of words", 1, 20, 10)
            freq_distribution = FreqDist(filtered_list)

            most_common_words = pd.DataFrame(freq_distribution.most_common(10))

            most_common = pd.DataFrame(
                {
                    "words": most_common_words[0],
                    "count": most_common_words[1]
                }
            )

            fig = px.histogram(most_common, x="words", y="count", title="Frequency Distribution", color="count")
            st.plotly_chart(fig)