import React from 'react';

export default function Products({ products }) {
    return (
        <div className="row mt-4">
            {products.map((product, index) => (
                <div className="col-md-4 mb-3" key={index}>
                    <h3>{product.name}</h3>
                    <p>{product.description}</p>
                    <a href={product.link} className="btn btn-secondary">Learn More</a>
                </div>
            ))}
        </div>
    );
}
