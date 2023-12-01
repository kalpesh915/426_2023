import { useState } from "react";

function Input1(){
    let [fname, setFname] = useState("");
    return <>
        <h1>Example of Input</h1>
        <input type="text" onKeyUp={(event)=>setFname(event.target.value)}></input>
        <h1>Welcome {fname}</h1>
    </>
}

export default Input1;