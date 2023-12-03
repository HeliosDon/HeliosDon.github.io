from pymongo import MongoClient
import main_functions

credentials = main_functions.read_from_file("credentials")
username = credentials["username"]
password = credentials["password"]

connection_string="mongodb+srv://{0}:{1}@learningMongoDB.<someToken>.mongodb.net/db?retryWrites=true&w=majority".format(username,password)

client = MongoClient(connection_string)

print(client.test)

dblist = client.list_database_names()

print(dblist)