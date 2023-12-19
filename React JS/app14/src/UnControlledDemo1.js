import { useRef } from "react";

function UnControlledDemo1(){

    function handelSubmit(event){
        event.preventDefault();
        //alert("Called");
        console.log(event.target.fname.value);
    }

    let fnameRef = useRef();
    let lnameRef = useRef();
    return <>
        <form onSubmit={handelSubmit}>
            <label htmlFor="fname">Enter First Name : </label>
            <input type="text" name="fname" id="fname" required ref={fnameRef}/> <br/>
            <label htmlFor="lname">Enter Last Name : </label>
            <input type="text" name="lname" id="lname" required ref={lnameRef}/> <br/>
            <input type="submit" value="Send Data"></input>
            <input type="reset" value="Reset"></input>
        </form>
    </>
}

export default UnControlledDemo1;