function Demo4(){

    function greetings(uname){
        alert(uname+" Welcome to world of React JS");
    }

    return <>
        <h1>Example of function</h1>
        {/* <button onClick={greetings}>Click Me</button> */}
        {/* <button onClick={()=>{greetings()}}>Click Me</button> */}
        <button onClick={()=>{greetings("Kairavi")}}>Click Me</button>
    </>
}

export default Demo4;