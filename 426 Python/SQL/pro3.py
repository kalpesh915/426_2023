import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="")
    print("Database Connected")
    myCursor = connection.cursor()
    query = "show databases"
    result = myCursor.execute(query)

    for tmp in myCursor:
        print(tmp)

    connection.close()
except Exception as err:
    print("Error is ",err)