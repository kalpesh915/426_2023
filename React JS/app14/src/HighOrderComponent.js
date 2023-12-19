import { useState } from "react";

function HighOrderComponent(){
    return <>
        {/* <Counter></Counter> */}
        <RedComponent data={Counter}></RedComponent>
        <GreenComponent data={Counter}></GreenComponent>
        <BlueComponent data={Counter}></BlueComponent>
    </>
}

function Counter(){
    let [count, setCount] = useState(0);
    return <>
        <h1>Value of Count is {count}</h1>
        <button onClick={()=>setCount(count + 1)}>Update</button>
    </>
}

function RedComponent(props){
    return <>
        <div style={{backgroundColor:"red", padding:"20px"}}>
            <props.data></props.data>
        </div>
    </>
}

function GreenComponent(props){
    return <>
        <div style={{backgroundColor:"green", padding:"20px"}}>
            <props.data></props.data>
        </div>
    </>
}

function BlueComponent(props){
    return <>
        <div style={{backgroundColor:"blue", padding:"20px"}}>
            <props.data></props.data>
        </div>
    </>
}

export default HighOrderComponent;