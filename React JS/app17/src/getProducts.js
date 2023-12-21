import { useEffect, useState } from "react";

function GetProducts(){
    
    let [products, setProducts] = useState([]);

    useEffect(()=>{
        fetch("https://dummyjson.com/products").then((result)=>{
            result.json().then((response)=>{
                //console.log(response);
                setProducts(response.products);
                //console.log(products);
            });
        });
    }, []);

    console.log(products);

    return <>
        <div className="table-responsive">
            <table className="table table-hover table-striped">
                <thead className="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Rating</th>
                        <th>Stock</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    {
                        products.map((product)=><tr>
                            <td>{product.id}</td>
                            <td>{product.title}</td>
                            <td>{product.description}</td>
                            <td>{product.price}</td>
                            <td>{product.discountPercentage}</td>
                            <td>{product.rating}</td>
                            <td>{product.stock}</td>
                            <td>{product.brand}</td>
                            <td>{product.category}</td>
                            <td><img src={product.thumbnail} className="w-50 rounded-circle"></img></td>
                        </tr>)
                    }
                </tbody>
            </table>
        </div>
    </>
}

export default GetProducts;