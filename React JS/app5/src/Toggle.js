import { useState } from "react"

function Toggle(){
    let [status, setStatus] = useState(true);
    return <>
        { status ? <h1>True</h1> : <h1>False</h1>}
        <hr />
        <button onClick={()=>setStatus(!status)}>Toggle</button>
    </>
}

export default Toggle;
