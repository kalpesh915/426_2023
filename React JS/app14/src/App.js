import logo from './logo.svg';
import './App.css';
import ControlledDemo1 from './ControlledDemo1';
import UnControlledDemo1 from './UnControlledDemo1';
import HighOrderComponent from './HighOrderComponent';

function App() {
  return (
    <div className="App">
      <header className="App-header">
      {/* <ControlledDemo1></ControlledDemo1>         */}
      {/* <UnControlledDemo1></UnControlledDemo1> */}
      <HighOrderComponent></HighOrderComponent>
      </header>
    </div>
  );
}

export default App;
