import axios from "axios";
import React, { useEffect, useState } from "react";
const ShowProduct = () => {
  const [product, setProduct] = useState();
  const [searchName, setSearchName] = useState([]);

  useEffect(() => {
    axios.get(`http://127.0.0.1:8000/api/getData`).then((res) => {
      setProduct(res.data);
    });
  }, []);
  const onChangeSearch = (key, value) => {
    const formData = new FormData();
    formData.append(key, value);
    axios.post(`http://localhost:8000/api/search`, formData).then((res) => {
      setSearchName(res.data);
    });
  };
//   console.log(!!searchName.Error);
  return (
    <div className="row justify-content-center gap-3">
      <br />
      {/* <div className="input-group mb-3">
        <span className="input-group-text">
          <i className="fa-solid fa-magnifying-glass"></i>
        </span>
        <input type="text" className="form-control" placeholder="Search" />
      </div> */}
      <div className="input-group mb-3">
        <input
          type="text"
          className="form-control"
          placeholder="Search"
          onChange={(e) => onChangeSearch("key", e.target.value)}
        />
      </div>
      <br />
      {!!searchName.data ? (
        searchName.data.map((ele, index) => 
        <div key={index} className="card col-2">
            <img
              src={`http://localhost:8000/images/${ele.img}`}
              style={{ width: "100%", height: "12rem" }}
              className="card-img-top"
              alt="..."
            />
            <div className="card-body">
              <h5 className="card-title">{ele.name}</h5>
              <p className="card-text text-truncate">{ele.description}</p>
              <div className="row">
                <p className="card-text col-6">{ele.price}</p>
                <p className="card-text col-6">{ele.category}</p>
              </div>
              <a
                href="/restaurants/{{$restaurant->id}}"
                className="btn btn-primary"
              >
                Detail
              </a>
            </div>
          </div>)
      ) : searchName.Error === "Not found" ? (
        <div>Not Found</div>
      ) : !!product ? (
        product.data.map((ele, index) => (
          <div key={index} className="card col-2">
            <img
              src={`http://localhost:8000/images/${ele.img}`}
              style={{ width: "100%", height: "12rem" }}
              className="card-img-top"
              alt="..."
            />
            <div className="card-body">
              <h5 className="card-title">{ele.name}</h5>
              <p className="card-text text-truncate">{ele.description}</p>
              <div className="row">
                <p className="card-text col-6">{ele.price}</p>
                <p className="card-text col-6">{ele.category}</p>
              </div>
              <a
                href="/restaurants/{{$restaurant->id}}"
                className="btn btn-primary"
              >
                Detail
              </a>
            </div>
          </div>
        ))
      ) : (
        ""
      )}
    </div>
  );
};
export default ShowProduct;
