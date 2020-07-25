import React, {Component} from 'react';
import AddProduct from './AddProduct';
import ChangeColor from './ChangeColor';
import Form from './Form';
import ListItemsDemo from './ListItemsDemo.js';
import MockProduct from './Mock-Product.js';
import Tan from './Tan.js';
import Linh from './Linh';

import { Switch, Route } from 'react-router-dom';

class Routing extends Component{
    render(){
        return (
                <Switch>
                    {/*Nếu không có exact thì thay đổi địa chỉ vẫn ở lại trang Home*/}
                    <Route path="/" exact component={MockProduct} />
                    {/*Đây là input thêm sản phẩm*/}
                    <Route path="/addProduct" component={AddProduct} />
                    {/*Đây là chỗ text màu sắc*/}
                    <Route path="/changeColor" component={ChangeColor} />
                    <Route path="/form" component={Form} />
                    <Route path="/lissItem" component={ListItemsDemo}/>
                    <Route path="/tan" component={Tan}/>
                    <Route path="/linh" component={Linh}/>
                </Switch>   
        );
    }
}

export default Routing;
