import { useState } from "react";

function ControlledDemo1(){
    let [fname, setFname] = useState("");
    return <>
        <h1>Example of Controlled Component</h1>
        <input type="text" onKeyUp={(event)=>setFname(event.target.value)}></input>
        <h1>Welcome {fname}</h1>
    </>
}

export default ControlledDemo1;