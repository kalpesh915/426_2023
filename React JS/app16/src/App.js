import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Link, Route, Routes } from 'react-router-dom';
import { About, Contact, Error404, Feedback, Home, Login } from './Components';
import Greetings from './Greetings';

function App() {
  const students = [
    {"roll" : 1, "fname" : "Kairavi", "lname" : "Parsana"},
    {"roll" : 2, "fname" : "Aashita", "lname" : "Gohel"},
    {"roll" : 3, "fname" : "Priya", "lname" : "Rathod"},
    {"roll" : 4, "fname" : "Nikhil", "lname" : "Dobariya"},
    {"roll" : 5, "fname" : "Kalpesh", "lname" : "Kisla"},
    {"roll" : 6, "fname" : "Sunny", "lname" : "Sata"},
    {"roll" : 7, "fname" : "Jigar", "lname" : "Vaghela"},
    {"roll" : 8, "fname" : "Harshil", "lname" : "Khakhi"}
  ];
  return (
    <div className="App">
      {/* Simple Routing Example */}
      
      {/* <BrowserRouter>
      <nav className="navbar navbar-expand-sm bg-dark navbar-dark">
        <ol className='navbar-nav'>
          <li className='nav-item'><Link className='nav-link' to="/">Home</Link></li>
          <li className='nav-item'><Link className='nav-link' to="/about">About</Link></li>
          <li className='nav-item'><Link className='nav-link' to="/contact">Contact</Link></li>
          <li className='nav-item'><Link className='nav-link' to="/feedback">Feedback</Link></li>
          <li className='nav-item'><Link className='nav-link' to="/login">Login</Link></li>
        </ol>
      </nav>
      <Routes>
        <Route path='/'element={<Home></Home>}></Route>
        <Route path='/about'element={<About></About>}></Route>
        <Route path='/contact'element={<Contact></Contact>}></Route>
        <Route path='/feedback'element={<Feedback></Feedback>}></Route>
        <Route path='/login'element={<Login></Login>}></Route>
        <Route path='*'element={<Error404></Error404>}></Route>
      </Routes>

      </BrowserRouter> */}

      {/* Dynamic Routing Example */}

      <BrowserRouter>
        <nav className='navbar navbar-expand-sm bg-dark navbar-dark'>
          <ol className='navbar-nav'>
          {
            students.map((student)=> <li className='nav-item'><Link className='nav-link' to={'/greetings/'+student.roll+"/"+student.fname+"/"+student.lname}>
              {student.fname}
            </Link></li>)
          }
          </ol>
        </nav>

        <Routes>
          <Route path='/greetings/:roll/:fname/:lname' element={<Greetings></Greetings>}></Route>
        </Routes>
      </BrowserRouter>

    </div>
  );
}

export default App;
