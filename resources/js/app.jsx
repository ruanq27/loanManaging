import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import Products from './components/Products';
import "../css/app.css";

const productsData = [
    { id: 1, name: 'Personal Loan', description: 'Flexible personal loans tailored to your needs.', link: '#' },
    { id: 2, name: 'Home Loan', description: 'Affordable home loans with competitive rates.', link: '#' },
    { id: 3, name: 'Auto Loan', description: 'Easy financing options for your new vehicle.', link: '#' },
];

function App() {
    return <Products products={productsData} />; 
}


const root = document.getElementById('products-root');
if (root) {
    ReactDOM.createRoot(root).render(<App />); 
}
