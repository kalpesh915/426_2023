function MapExample1(){
    const data = ["Aashita", "Nikhil", "Jigar", "Kalpesh", "Harshil", "Sunny", "Kairavi"];

    return <>
        {
            data.map((tmp)=>
                <h1>Welcome {tmp}</h1>
            )
        }
    </>
}

export default MapExample1;