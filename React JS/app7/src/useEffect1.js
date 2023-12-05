import React from "react";
import { useEffect } from "react";

function Effect1(){

    // React.useEffect(()=>{
    //     console.log("Use Effect Called");
    // });

    useEffect(()=>{
        console.log("Use Effect Called");
    });

    return <>
        <h1>Example of useEffect</h1>
    </>
}   

export default Effect1;