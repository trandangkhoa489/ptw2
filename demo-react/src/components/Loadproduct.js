import React, {Component} from 'react';
import Product from './Product/Product';
import dl from './dulieu.json';

class Loadproduct extends Component{
    render(){
        console.log(dl);
        let element = dl.map((dl) => {
            let result = '';
            // Nếu thuộc tính status = false thì sẽ ẩn và ngược lại
            if (dl.status) { 
                //thêm key vì key lấy id, mà id là duy nhất, code sẽ không lỗi khi có key là duy nhất
                result = <Product 
                            key={ dl.id }
                            name={ dl.name }
                            price={ dl.price }
                            image={ dl.image }
                        >{dl.description}</Product>
                }
            return result;
        });

        return (
            <div>
                <h1>Trang chủ</h1>
                <div className="row">
                    <div className="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        {/*element sẽ show ra các thuộc tính trong mạng product*/}
                        { element }
                    </div>
                </div> 
            </div>
        );
    }
}

export default Loadproduct;
