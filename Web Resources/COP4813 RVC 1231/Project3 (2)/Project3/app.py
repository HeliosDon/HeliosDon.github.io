from flask import Flask, render_template, request, url_for
from flask_pymongo import PyMongo
from flask_wtf import FlaskForm
from wtforms import StringField, DecimalField, SelectField,DateField

app = Flask(__name__)
app.config["SECRET_KEY"]="6e91da5cec51567e"
app.config["MONGO_URI"] = "mongodb+srv://sfils006:Sept0997@learningmongodb.2c9xghl.mongodb.net/db?retryWrites=true&w=majority"
mongo = PyMongo(app)

class Expenses(FlaskForm):
    desc = StringField("Description")
    cat = SelectField("Category",
                      choices=[('rent', 'Rent'),
                               ('electricity', 'Electricity'),
                               ('water', 'Water'),
                               ('gas', 'Gas'),
                               ('insurance', 'Insurance'),
                               ('food', 'Food'),
                               ('school', 'School'),
                               ('misc', 'Misc')])

    price = DecimalField("Price")
    date = DateField("Date")

def get_total_expenses(category):
    cost_of_cat = mongo.db.expenses.find()
    total_spend=0
    for i in cost_of_cat:
        total_spend+=float(i["price"])
        return total_spend


@app.route('/')
def index():
    my_expenses = mongo.db.expenses.find()
    total_cost=0
    for i in my_expenses:
        total_cost+=float(i["cost"])
    expenses_by_cat = [
        ("Rent" , get_total_expenses("rent")),
        ("Electricity", get_total_expenses("electricity")),
        ("Water", get_total_expenses("water")),
        ("Gas" , get_total_expenses("gas")),
        ("Insurance", get_total_expenses("insurance")),
        ("Food", get_total_expenses("food")),
        ("School" , get_total_expenses("school")),
        ("Misc", get_total_expenses("misc"))
    ]

    return render_template("index.html", expenses=total_cost, expensesByCategory=expenses_by_cat)


@app.route('/addExpenses',methods=["GET","POST"])
def addExpenses():
    my_expenses_form = Expenses()

    if request.method == "POST":
        new_expense = {"desc":my_expenses_form.desc.data,
                       "cat":my_expenses_form.desc.data,
                       "price":str(my_expenses_form.desc.data),
                       "date":my_expenses_form.desc.data.strftime("%Y-%m-%d")}
        mongo.db.expenses.insert_one(new_expense)

        return render_template("expenseAdded.html")
    return render_template("addExpenses.html",form=my_expenses_form)

app.run(port=5050, debug=True)