import { useEffect, useState } from 'react';
import './weather.css';

function WeatherInfo() {

    let [cityName, setCityName] = useState("Rajkot");
    let [weatherData, setWeatherData] = useState({});
    let [windData, setWindData] = useState({});
    let [main, setMain] = useState({});
    let [sys, setSys] = useState({});
    let [mainCityName, setMainCityName] = useState("");
    let [icon, setIcon] = useState("wi wi-day-sunny icon");
    let sunriseTime, sunsetTime;
    let [SRS, setSRS] = useState("");
    let [SSS, setSSS] = useState("");
    let [cloudData, setCloudData] = useState({});

    const APIURL = `https://api.openweathermap.org/data/2.5/weather?q=${cityName}&appid=cc49a1b157d9c597ad4623b6276609d7&units=metric`;


    function getWeatherInfo() {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                //console.log(result);

                if (result.cod == 404) {
                    alert(result.message);
                } else {
                    // store data in state
                    setWeatherData(result.weather[0]);
                    setMain(result.main);
                    setSys(result.sys);
                    setWindData(result.wind);
                    setCloudData(result.clouds);
                    setMainCityName(result.name);

                    sunriseTime = new Date(sys.sunrise * 1000);
                   let sunriseStr = sunriseTime.getHours() + ":"+sunriseTime.getMinutes();
                   setSRS(sunriseStr);

                   sunsetTime = new Date(sys.sunset * 1000);
                   let sunsetStr = sunsetTime.getHours() + ":"+sunsetTime.getMinutes();
                   setSSS(sunsetStr);


                    if (weatherData.main == "Clouds") {
                        setIcon("wi wi-day-cloudy icon");
                    } else if (weatherData.main == "Rain") {
                        //alert("Called");
                        setIcon("wi wi-day-rain icon");
                        //alert(icon);
                    } else if (weatherData.main == "Mist") {
                        setIcon("wi wi-day-sprinkle icon");
                    } else if (weatherData.main == "Snow") {
                        setIcon("wi wi-day-snow icon");
                    } else if (weatherData.main == "Smoke") {
                        setIcon("wi wi-day-smoke icon");
                    } else if (weatherData.main == "Thunderstrom") {
                        setIcon("wi wi-day-thunderstrom icon");
                    } else {
                        setIcon("wi wi-day-sunny icon");
                    }
                    //alert(result.name);

                    //console.log(sys);
                }
            });
        });
    }


    // call at project load
    useEffect(() => {
        getWeatherInfo();
    }, []);

    return <>
        <div className='container-fluid'>
            <div>
                <h1 className='text-center text-bg-primary p-5'>Weather Information</h1>
            </div>

            <div className='row'>
                <div className='col-md-12'>
                    <input type='text' value={cityName} className='form-control form-control-lg' onChange={(event) => setCityName(event.target.value)}></input>
                    <button className='btn btn-primary my-3' onClick={() => getWeatherInfo()}>Search Now</button>
                </div>
            </div>

            <div className='row'>
                <div className='col-md-12'>
                    <i className={icon}></i>
                </div>
            </div>

            <div className='row'>
                <div className='col-6'>
                    <h1>{mainCityName} ({sys.country})</h1>
                    <p>{weatherData.main}</p>
                </div>
                <div className='col-6'>
                    <h1 className='display-1'>{main.temp} &#x2103;</h1>
                </div>
            </div>

            <div className='row'>
                <div className='col-md-3'>
                    Max.
                    <p className='info'>{main.temp_max}</p>
                </div>
                <div className='col-md-3'>
                    Min
                    <p className='info'>{main.temp_min}</p>
                </div>
                <div className='col-md-3'>
                    Pressure
                    <p className='info'>{main.pressure}</p>
                </div>
                <div className='col-md-3'>
                    Humidity
                    <p className='info'>{main.humidity}</p>
                </div>
            </div>

            <div className='row'>
                <div className='col-md-3'>
                    Wind Speed
                    <p className='info'>{windData.speed}</p>
                </div>
                <div className='col-md-3'>
                    Wind Degree
                    <p className='info'>{windData.deg}</p>
                </div>
                <div className='col-md-3'>
                    Pressure
                    <p className='info'>{main.pressure}</p>
                </div>
                <div className='col-md-3'>
                    Humidity
                    <p className='info'>{main.humidity}</p>
                </div>
            </div>

            <div className="row">
                <div className="col-sm-6 text-center p-2">
                    <i className="wi wi-sunrise display-3"></i>
                    <p className="display-3">{SRS}</p>
                </div>
                <div className="col-sm-6 text-center p-2">
                    <i className="wi wi-sunset display-3"></i>
                    <p className="display-3">{SSS}</p>
                </div>
            </div>
        </div>
    </>
}

export default WeatherInfo;