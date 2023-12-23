import './cdn.css';
import { useEffect, useState } from "react";

function APIComponent(){

    const APIURL = "http://localhost:3000/students";

    let [action, setAction] = useState(true);
    let [id, setId] = useState();
    let [fname, setFname] = useState();
    let [lname, setLname] = useState();
    let [city, setCity] = useState();
    let [email, setEmail] = useState();
    let [phone, setPhone] = useState();

    let [students, setStudents] = useState([]);

    // function for get all students from API
    function getAllStudents(){
        fetch(APIURL).then((response)=>{
            //console.log(response);
            response.json().then((result)=>{
                //console.log(result);
                setStudents(result);
                //console.log(students);
            });
        });
        resetForm();
    }

   

    // Function for form submit Handle
    function HandleForm(event){
        //alert("Called");
        event.preventDefault();
        

        if(action){
            /// insert data

            fetch(APIURL, {
                method : "POST",
                headers : {
                    "accept" : "application/json",
                    "content-type" : "application/json"
                },
                body : JSON.stringify({fname, lname, city, email, phone})
            }).then((response)=>{
                response.json().then((result)=>{
                    //alert("New Student Created ");
                    setAction(true);
                    resetForm();
                    getAllStudents();
                });
            });
        }
        else{
            // update data
            fetch(APIURL+"/"+id, {
                method : "put",
                headers : {
                    "accept" : "application/json",
                    "content-type" : "application/json"
                },
                body : JSON.stringify({fname, lname, city, email, phone})
            }).then((response)=>{
                response.json().then((result)=>{
                    //alert("Record Updated");
                    setAction(true);
                    resetForm();
                    getAllStudents();
                });
            });
        }
    }


    // delete data
    function deleteData(studentid){
        //alert(studentid);
        if(window.confirm("Are you sure to delete this data with id "+ studentid+" ?")){
            fetch(APIURL+"/"+studentid,{
                method : "delete"
            }).then((response)=>{
                response.json().then((result)=>{
                    alert("Data Deleted with id "+studentid);
                    getAllStudents();
                })
            });
        }
    }

    // get data for Edit
    function getDataforEdit(studentid){
        //alert(studentid);
        fetch(APIURL+"/"+studentid).then((response)=>{
            response.json().then((result)=>{
                setId(result.id);
                setFname(result.fname);
                setLname(result.lname);
                setCity(result.city);
                setEmail(result.email);
                setPhone(result.phone);
                setAction(false);
            });
        });
    }

    // function for reset all the states
    function resetForm(){
        setId(0);
        setFname("");
        setLname("");
        setCity("");
        setEmail("");
        setPhone("");
    }

    useEffect(()=>{
        getAllStudents();
    }, []);

    return <>
        <div className="container-fluid">
            <h1 className="text-bg-primary p-4">JSON API CRUD Example</h1>

            <div className="row">
                <div className="col-md-3 bg-dark">
                    <form onSubmit={HandleForm}>
                        <div className="my-2 form-floating">
                            <input type="text" name="fname" id="fname" placeholder="Enter First Name" className="form-control" required autoFocus onChange={(event)=>setFname(event.target.value)} value={fname}></input>
                            <label className="form-label" htmlFor="fname">Enter First Name </label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" className="form-control" required onChange={(event)=>setLname(event.target.value)} value={lname}></input>
                            <label className="form-label" htmlFor="lname">Enter Last Name </label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="city" id="city" placeholder="Enter City" className="form-control" required onChange={(event)=>setCity(event.target.value)} value={city}></input>
                            <label className="form-label" htmlFor="city">Enter City </label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" className="form-control" required onChange={(event)=>setEmail(event.target.value)} value={email}></input>
                            <label className="form-label" htmlFor="email">Enter Email Address </label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" className="form-control" required pattern="[0-9]{10,13}" onChange={(event)=>setPhone(event.target.value)} value={phone}></input>
                            <label className="form-label" htmlFor="phone">Enter Phone Number </label>
                        </div>
                        <div className="my-2 form-floating">
                            {
                                action ? <div>
                                    <input type="submit" value="Add New" className="btn btn-primary"></input>
                                    <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
                                </div> : <div>
                                    <input type="submit" value="Save" className="btn btn-primary"></input>
                                    <input type="button" value="Cancel" className="btn btn-danger mx-2" onClick={()=>setAction(true)}></input>
                                </div>
                            }
                        </div>
                    </form>
                </div>

                <div className="col-md-9 table-responsive">
                    <table className="table table-hover table-striped">
                        <thead className="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            {
                                students.map((student)=><tr>
                                    <td>{student.id}</td>
                                    <td>{student.fname}</td>
                                    <td>{student.lname}</td>
                                    <td>{student.city}</td>
                                    <td>{student.email}</td>
                                    <td>{student.phone}</td>
                                    <td>
                                        <button className='btn btn-primary' onClick={()=>getDataforEdit(student.id)}>
                                            <i className='fa fa-pen'></i>
                                        </button>
                                        <button className='btn btn-danger mx-2' onClick={()=>{
                                            deleteData(student.id)
                                        }}>
                                            <i className='fa fa-trash'></i>
                                        </button>
                                    </td>
                                </tr>)
                            }
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </>
}

export default APIComponent;