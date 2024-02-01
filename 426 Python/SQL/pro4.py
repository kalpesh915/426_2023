import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="")
    print("Database Connected")
    myCursor = connection.cursor()
    query = "create database pytmp"
    result = myCursor.execute(query)
    print("Database Created")

    connection.close()
except Exception as err:
    print("Error is ",err)