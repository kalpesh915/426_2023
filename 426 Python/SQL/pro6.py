import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="",
    database="pydb")

    myCursor = connection.cursor()
    query = "alter table marks add column grade varchar(2)"
    result = myCursor.execute(query)
    print("Table Updated")

    connection.close()
except Exception as err:
    print("Error is ",err)