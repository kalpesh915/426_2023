import { useState } from "react"

function Demo2(){
    // State
    const [x, setX] = useState(0);
    return <>
        <h1>Example of Hooks</h1>
        <h1>{x}</h1>
        <button onClick={()=>setX(x+1)}>Update</button>
    </>
}

export default Demo2;