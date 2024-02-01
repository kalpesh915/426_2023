import mysql.connector

try:
    # create connection and cursor objects
    connection = mysql.connector.connect(host="localhost", user="root", passwd="", database="pydb")
    cursor = connection.cursor()

    # build a query
    query = "delete from students where roll > 50"

    # execute query
    cursor.execute(query)
    print(cursor.rowcount,"Records Deleted")

    connection.commit()
    connection.close()
except Exception as err:
    connection.rollback()
    print("Error is ",err)
