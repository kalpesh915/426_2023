import { useRef } from "react";

function RefExample2(){

    const fnameRef = useRef(null);
    return <>
        <h1>Example of UseRef Hooks</h1>
        <input type="text" ref={fnameRef}></input>
        <button onClick={()=>handleFname()}>Click Me</button>
    </>

    function handleFname(){
        fnameRef.current.value = "Kairavi Pravinbhai Parasan";
        fnameRef.current.style = "color:white; background-color:black; padding:20px;";
    }
}

export default RefExample2;