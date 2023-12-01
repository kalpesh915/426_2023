function Component1() {
    let x = 10;
    return <>
        <h1>Value of X is {x} </h1>
        <button onClick={updateX}>Update</button>
    </>

    function updateX() {
        //alert("Called");
        console.log("x is "+x);
        x += 10;
    }
}



export default Component1;