import React from 'react';
import ReactDOM from 'react-dom/client';

function App() {
    return (
        <div className="react-hero">
            <h1>Hello from NanoPHP + React!</h1>
            <p>Full-stack power unlocked.</p>
        </div>
    );
}

if (document.getElementById('app')) {
    const root = ReactDOM.createRoot(document.getElementById('app'));
    root.render(<App />);
}