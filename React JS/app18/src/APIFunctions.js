function APIFunctions(){

    // API URL for communication
    const APIURL = "http://localhost:3000/students";

    function addData(){
        let fname, lname;

        fname = prompt("Enter First Name");
        lname = prompt("Enter Last Name");

        fetch(APIURL, {
            method : "POST",
            headers : {
                "Accept" : "Application/json",
                "Content-type" : "Application/json"
            },
            body : JSON.stringify({fname, lname})
        }).then((response)=>{
            response.json().then((result)=>{
                alert("New Student Created "+result.id);
            });
        });
    }

    // get data from API

    function getData(){
        fetch(APIURL, {
            method : "GET"
        }).then((response)=>{
            response.json().then((result)=>{
                console.log(result);
            });
        });
    }

    // update data on API
    function updateData(){
        let id, fname, lname;

        id = prompt("Enter ID for update Data");
        fname = prompt("Enter First Name");
        lname = prompt("Enter Last Name");

        if(window.confirm("Are you sure to upate Data")){
            fetch(APIURL+"/"+id, {
                method : "PUT",
                headers : {
                    "Accept" : "Application/json",
                    "Content-type" : "Application/json"
                }, 
                body : JSON.stringify({fname, lname})
            }).then((response)=>{
                response.json().then((result)=>{
                    alert("Data Updated with ID "+result.id);
                });
            });
        }else{
            alert("Action Cancelled");
        }
    }

    // delete data
    function deleteData(){
        let id = prompt("Enter ID for delete Data")

        fetch(APIURL+"/"+id, {
            method : "DELETE"
        }).then((response)=>{
            response.json().then((result)=>{
                alert("Data Deleted with ID "+id);
            })
        });
    }

    return <>
        <button onClick={()=>getData()}>Get Data</button>
        <button onClick={()=>{addData()}}>Add New Data</button>
        <button onClick={()=>updateData()}>Update Data</button>
        <button onClick={()=>{deleteData()}}>Delete Data</button>
    </>
}   

export default APIFunctions;