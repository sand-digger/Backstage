<?php
namespace Admin\Controller;
use Think\Controller;

//不验证的控制器
class PublicController extends Controller {

	//ajxa检查验证码
	public function check_code() {
		$code = $_GET['code'];
		//验证码
		$verify = new \Think\Verify();
		if ($verify -> check($code)) {
			$this -> ajaxReturn(1);
			//成功
		} else {
			$this -> ajaxReturn(0);
			//失败
		}
	}

	//登录验证
	public function login() {
		if (!empty($_POST)) {
			$returnData['success'] = false;

			$where['account'] = I('account');
			//用户名
			$where['password'] = md5(I('password'));
			//密码
			$m = M('user');
			$result = $m -> field('id,account,login_count,status') -> where($where) -> find();
			if ($result) {
				if ($result['status'] == 0) {
					$returnData['info'] = "账号已禁用";
				} else {
					session('aid', $result['id']);
					//用户ID
					session('account', $result['account']);
					//保存登录信息
					$data['id'] = $result['id'];
					//用户ID
					$data['login_ip'] = get_client_ip();
					//最后登录IP
					$data['login_time'] = time();
					//最后登录时间
					$data['login_count'] = $result['login_count'] + 1;
					$m -> save($data);
					$returnData['success'] = true;
				}
			} else {
				$returnData['info'] = "账户或密码错误";
			}
			$this -> ajaxReturn($returnData);
		} else {
			if (session('aid')) {
				$this -> error('已登录，正在跳转到主页', U('Index/index'));
			}
			$this -> display();
		}
	}

	//验证码
	public function verify() {
		ob_clean();
		//清除缓存
		$Verify = new \Think\Verify();
		$Verify -> fontSize = 30;
		//验证码字体大小
		$Verify -> length = 4;
		//验证码位数
		$Verify -> entry();
	}

}
