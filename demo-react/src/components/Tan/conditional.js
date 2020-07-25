import React from 'react';
function UserGreeting(props) {
    return <h1>Chào mừng bạn đã quay lại</h1>;
  }
  function GuestGreeting(props) {
    return <h1>Hãy đăng nhập <br></br>
       Nếu chưa có tài khoản, vui lòng tạo tài khoản mới</h1>;
  }
  function Greeting(props) {
    const isLoggedIn = props.isLoggedIn;
    if ( !isLoggedIn) {
      return <UserGreeting />;
    }
    return <GuestGreeting />;
  }
class conditional extends React.Component {
    render() {
        return (
            <div>
                <Greeting/>
            </div>
        );
    }
}

export default conditional;