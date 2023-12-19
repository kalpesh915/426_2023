import logo from './logo.svg';
import './App.css';
import Home from './Home';
import About from './About';
import Contact from './Contact';
import Feedback from './Feedback';
import Login from './Login';

// Routing Code
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';

function App() {
  return (
    <div className="App">

      <BrowserRouter>
        <nav className='navbar navbar-expand-sm bg-dark navbar-dark'>
          <ul className='navbar-nav'>
            <li className='nav-item'><Link className='nav-link' to="/">Home</Link></li>
            <li className='nav-item'><Link className='nav-link' to="/about">About</Link></li>
            <li className='nav-item'><Link className='nav-link' to="/contact">Contact</Link></li>
            <li className='nav-item'><Link className='nav-link' to="/feedback">Feedback</Link></li>
            <li className='nav-item'><Link className='nav-link' to="/login">Login</Link></li>
          </ul>
        </nav>

        <Routes>
          <Route path='/' element={<Home/>}></Route>
          <Route path='/about' element={<About/>}></Route>
          <Route path='/contact' element={<Contact/>}></Route>
          <Route path='/feedback' element={<Feedback/>}></Route>
          <Route path='/login' element={<Login/>}></Route>
        </Routes>
      </BrowserRouter>


    </div>
  );
}

export default App;
