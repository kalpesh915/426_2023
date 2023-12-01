import { useState } from "react"

function HideShow(){
    let [status, setStatus] = useState(true);
    return <>
        { status ? <h1>True</h1> : <h1>False</h1>}
        <hr />
        <button onClick={()=>setStatus(false)}>Hide</button>
        <button onClick={()=>setStatus(true)}>Show</button>
    </>
}

export default HideShow;
