import React, {Component} from 'react';
import Product from './Product/Product';

class MockProduct extends Component{
    render(){
        var product = [
            {
                id: 1,
                name: 'Iphone 6',
                price: 120,
                image: 'https://cdn.tgdd.vn/Products/Images/42/87846/iphone-6s-plus-32gb-hh-600x600-600x600-600x600-600x600.jpg',
                description: 'Điện thoại iPhone 6s Plus 32 GB được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên iPhone 6 Plus), camera cho tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt',
                status: true
            },
            {
                id: 2,
                name: 'Samsung note 9',
                price: 120,
                image: 'https://cdn.tgdd.vn/Products/Images/42/183507/samsung-galaxy-note-9-512gb-blue-600x600.jpg',
                status: true
            },
            {
                id: 3,
                name: 'Oppo f9',
                price: 120,
                image: 'https://vn-test-11.slatic.net/p/fe4ff76318548b23df2d9d3f812a9dab.png',
                status: true
            },
            {
                id: 4,
                name: 'Redmi note 7',
                price: 133,
                image: 'https://www.xtmobile.vn/vnt_upload/product/05_2020/thumbs/600_redmi_note_9_trang.jpg',
                status: false
            },
        ];

        let element = product.map((product,index) => {
            let result = '';
            // Nếu thuộc tính status = false thì sẽ ẩn và ngược lại
            if (product.status) { 
                //thêm key vì key lấy id, mà id là duy nhất, code sẽ không lỗi khi có key là duy nhất
                result = <Product 
                            key={ product.id }
                            name={ product.name }
                            price={ product.price }
                            image={ product.image }
                        >{product.description}</Product>
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

export default MockProduct;
