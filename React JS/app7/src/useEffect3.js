import React, { useState } from "react";
import { useEffect } from "react";

function Effect3(){
    let [ip1, setIp1] = useState(0);
    let [ip2, setIp2] = useState(0);
    
    useEffect(()=>{
        console.log("Use Effect Called of ip1");
    }, [ip1]);

    useEffect(()=>{
        console.log("Use Effect Called of ip2");
    }, [ip2]);

    return <>
        <h1>Example of useEffect</h1>
        <h1>ip1 is {ip1} and ip2 is {ip2}</h1>
        <button onClick={()=>{setIp1(ip1+1)}}>Update ip1</button>
        <button onClick={()=>{setIp2(ip2+1)}}>Update ip2</button>
    </>
}   

export default Effect3;
