import { useState } from "react";

function Child(props){
    let [ip, setIp] = useState(1);
    return <>
        <h1>Child Component </h1>
        <p>Value of ip is {ip}</p>
        <button onClick={()=>props.data(ip)}>Click Me</button>
    </>
}

export default Child;