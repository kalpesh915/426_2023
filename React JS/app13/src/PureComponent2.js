import { useMemo, useState } from "react";

function PureComponent2(){

    let [ip1, setIp1] = useState(1);
    let [ip2, setIp2] = useState(1);

    useMemo(()=>{
        console.log("State 1 Updated");
    }, [ip1]);

    useMemo(()=>{
        console.log("State 2 Updated");
    }, [ip2]);

    return <>
        <h1>Example of useMemo</h1>
        <h1>Ip 1 is {ip1}</h1>
        <h1>Ip 2 is {ip2}</h1>
        <button onClick={()=>setIp1(Math.ceil(Math.random() * 10))}>Update ip1</button>
        <button onClick={()=>setIp2(Math.ceil(Math.random() * 10))}>Update ip2</button>
    </>
}

export default PureComponent2;
