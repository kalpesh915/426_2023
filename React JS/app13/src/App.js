import logo from './logo.svg';
import './App.css';
import PureComponent1 from './PureComponent1';
import PureComponent2 from './PureComponent2';
import RefExample1 from './RefExample1';
import RefExample2 from './RefExample2';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        {/* <PureComponent1></PureComponent1> */}
        {/* <PureComponent2></PureComponent2> */}
        {/* <RefExample1></RefExample1> */}
        <RefExample2></RefExample2>
      </header>
    </div>
  );
}

export default App;
