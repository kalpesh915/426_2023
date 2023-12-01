function Demo1(){
    function updateX(){
        x += 10;
        console.log("x is "+x);
    }

    let x = 100;
    return <>
        <h1>Example of Variable</h1>
        <h1>{x}</h1>
        <button onClick={updateX}>Update</button>
    </>
}

export default Demo1;