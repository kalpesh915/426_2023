import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="",
    database="pydb")

    myCursor = connection.cursor()
    query = "create table marks (marksid int auto_increment primary key, roll int," \
            " total int, result varchar(20))"
    result = myCursor.execute(query)
    print("Table Created")

    connection.close()
except Exception as err:
    print("Error is ",err)