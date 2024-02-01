import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="",
    database="pydb")

    myCursor = connection.cursor()
    query = "insert into students (fname, lname, city, email, phone, gender) values (" \
            "%s, %s, %s, %s, %s, %s)"
    data = ("Priya", "Rathod", "Rajkot", "Priya@atmiyauni.edu", "9988998899", "Female")
    myCursor.execute(query, data)
    print("New Record Created")
    connection.commit()
    connection.close()
except Exception as err:
    connection.rollback()
    print("Error is ",err)