function MapExample2(){
    const students = [
        {"id": 1, "fname" : "Kairavi", "lname" : "Parsana", "phone" : "9988998899", "email" : "kairavi@gmail.com"},
        {"id": 2, "fname" : "Jigar", "lname" : "Vaghela", "phone" : "9988998899", "email" : "kairavi@gmail.com"},
        {"id": 3, "fname" : "Nikhil", "lname" : "Dobariya", "phone" : "9988998899", "email" : "kairavi@gmail.com"},
        {"id": 4, "fname" : "Sunny", "lname" : "Sata", "phone" : "9988998899", "email" : "kairavi@gmail.com"},
        {"id": 5, "fname" : "Harshil", "lname" : "Khakhi", "phone" : "9988998899", "email" : "kairavi@gmail.com"},
        {"id": 6, "fname" : "Ashita", "lname" : "Gohel", "phone" : "9988998899", "email" : "ashita@gmail.com"},
        {"id": 7, "fname" : "Kalpesh", "lname" : "Kisla", "phone" : "9988998899", "email" : "kalpesh@gmail.com"}];

        return <>
            <table className="table table-hover table-striped">
                <thead className="table-dark">
                    <tr>
                        <th>Key</th>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        students.map((student, keyValue)=><tr key={keyValue}>
                            <td>{keyValue}</td>
                            <td>{student.id}</td>
                            <td>{student.fname}</td>
                            <td>{student.lname}</td>
                            <td>{student.phone}</td>
                            <td>{student.email}</td>
                        </tr>)
                    }
                </tbody>
            </table>
        </>
    }

    export default MapExample2;