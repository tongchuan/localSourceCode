<?php
/**
* http://git.yonyou.com/sscplatform/fc_doc/blob/master/web-apply.md
* 申请单
*/
class sqController extends baseController{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		echo "string";
		exit();
	}
	/**
	* 申请单服务查询
	* /node/getLoanBillItemInformation
	* POST
	* 参数 {"billType":"rtsCb5w0YbnDikctwy6ax"}
	*/

	public function getLoanBillItemInformation(){
		echo '{"code":"0","information":[{"source_edit":true,"source_input":true,"dest_property_name":"dealdate","source_type":"1300","source_code":"dealdate","source_name":"申请日期"},{"source_edit":true,"source_input":true,"dest_property_name":"project","source_type":"1500","source_code":"zdyhead","source_name":"项目"},{"source_edit":true,"source_input":true,"dest_property_name":"feeitem","source_type":"1500","source_code":"costProject","source_name":"费用项目"},{"source_edit":true,"source_input":true,"dest_property_name":"city","source_type":"1540","source_code":"city","source_name":"目的地"},{"source_edit":true,"source_input":true,"dest_property_name":"startDate","source_type":"1300","source_code":"startDate","source_name":"开始日期"},{"source_edit":true,"source_input":true,"dest_property_name":"endDate","source_type":"1300","source_code":"endDate","source_name":"结束日期"},{"source_edit":true,"source_input":true,"dest_property_name":"descript","source_type":"1000","source_code":"descript","source_name":"事由"},{"source_edit":true,"source_input":true,"dest_property_name":"money","source_type":"1200","source_code":"money","source_name":"预计费用"},{"source_edit":true,"source_input":false,"dest_property_name":"usedMoney","source_type":"1200","source_code":"usedMoney","source_name":"已用费用"},{"source_edit":true,"source_input":false,"dest_property_name":"restMoney","source_type":"1200","source_code":"restMoney","source_name":"余额"},{"source_edit":true,"source_input":true,"dest_property_name":"org","source_type":"1500","source_code":"assumeOrg","source_name":"费用承担单位"},{"source_edit":true,"source_input":true,"dest_property_name":"dept","source_type":"1500","source_code":"assumeDept","source_name":"费用承担部门"}],"flr":{"id":1,"pk":"Z1SCMUuCGR1E9EGedh3jp","ismtappbill":true,"job":"1001D4100000000004DO","jobname":"集团项目0001","expensetype":"1001D41000000000069F","expensetypename":"收入1","issamemoney":false,"reserveamount":100,"startdate":1483632000000,"enddate":1509897600000,"ismustflushloan":false,"enable":false},"otherInformation":{"djlxpk":"zoSC2W79c2f6BBPgXTWmo","dest_billtype":"","Djdl":"sq"},"bodyInformation":[{"itemName":"sq_trip","defaultValue":[{"perset":{"ygtrafficcost":{"dest_property_name":"ygtrafficcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估交通费用"},"ygdays":{"dest_property_name":"ygdays","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估出差天数"},"yghotelcost":{"dest_property_name":"yghotelcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估住宿费"},"begindate":{"dest_property_name":"begindate","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发日期"},"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估合计"},"hotelstandard":{"dest_property_name":"hotelstandard","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"住宿标准"},"toCity":{"dest_property_name":"toCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"目的地"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"},"ygcateringcost":{"dest_property_name":"ygcateringcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估餐饮费用"},"fromCity":{"dest_property_name":"fromCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发地"},"tripWay":{"dest_property_name":"tripWay","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"交通工具"}},"defined":[{"source_edit":true,"source_input":true,"dest_property_name":"defitem1","formula":"","source_type":"1000","source_code":"defitem1","source_name":"人数"}]}],"itemValue":[{"perset":{"ygtrafficcost":{"dest_property_name":"ygtrafficcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估交通费用"},"ygdays":{"dest_property_name":"ygdays","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估出差天数"},"yghotelcost":{"dest_property_name":"yghotelcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估住宿费"},"begindate":{"dest_property_name":"begindate","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发日期"},"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估合计"},"hotelstandard":{"dest_property_name":"hotelstandard","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"住宿标准"},"toCity":{"dest_property_name":"toCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"目的地"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"},"ygcateringcost":{"dest_property_name":"ygcateringcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估餐饮费用"},"fromCity":{"dest_property_name":"fromCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发地"},"tripWay":{"dest_property_name":"tripWay","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"交通工具"}},"defined":[{"source_edit":true,"source_input":true,"dest_property_name":"defitem1","formula":"","source_type":"1000","source_code":"defitem1","source_name":"人数"}]}]},{"itemName":"sq_other","defaultValue":[{"perset":{"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"金额"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"}},"defined":[]}],"itemValue":[{"perset":{"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"金额"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"}},"defined":[]}]}]}';
		exit();
	}
	/**
	* 保存接口
	* POST
	* {"djlxpk":"rtsCb5w0YbnDikctwy6ax","dealdate":"2017-07-17","zdyhead":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","costProject":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","city":"上海","startDate":"2017-07-13","endDate":"2017-07-14","descript":"我们hhah","money":1400,"usedMoney":1000,"restMoney":400,"assumeOrg":"gdgdsgdg,用友网络科技股份有限公司","assumeDept":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办","nodeBusinessTravelList":[{"recordtype":"sq_trip","project":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","szxm":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","fromCity":"北京","toCity":"上海","begindate":"2017-07-13","tripWay":"飞机","ygtrafficcost":1200,"ygdays":2,"yghotelcost":350,"money":1100,"defitem1":"测试项目1","defitem2":"2017-07-13","defitem3":200,"defitem4":"测试输入"},{"recordtype":"sq_other","szxm":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","project":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","money":1500}]}
	*/
	public function saveBusinessTripNodeNew(){
		echo '{"information":"","code":"0","djpk":"HTSCDCuyzdeSilv8K1ul2"}';
		exit();
	}

	/**
	* 修改接口
	* POST	/nodeBusinessTrip/updateBusinessTripNodeNew
	* {"pk":"HTSCDCuyzdeSilv8K1ul2","djlxpk":"rtsCb5w0YbnDikctwy6ax","dealdate":"2017-07-17","zdyhead":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","costProject":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","city":"上海","startDate":"2017-07-13","endDate":"2017-07-14","descript":"我们hhah","money":1400,"usedMoney":1000,"restMoney":400,"assumeOrg":"gdgdsgdg,用友网络科技股份有限公司","assumeDept":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办","nodeBusinessTravelList":[{"recordtype":"sq_trip","project":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","szxm":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","fromCity":"北京","toCity":"上海","begindate":"2017-07-13","tripWay":"飞机","ygtrafficcost":1200,"ygdays":2,"yghotelcost":350,"money":1100,"defitem1":"测试项目1","defitem2":"2017-07-13","defitem3":200,"defitem4":"测试输入"},{"recordtype":"sq_other","szxm":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","project":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","money":1500}]}
	*/
	public function updateBusinessTripNodeNew(){
		echo '{"information":"","code":"0","djpk":"HTSCDCuyzdeSilv8K1ul2"}';
		exit();
	}
	/**
	* 单据查询接口
	* get	/nodeBusinessTrip/getBusinessTripNodeList
	*
	*/ 
	public function getBusinessTripNodeList(){
		echo '{"code":"0","information":[{"assumeDept":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办","assumeOrg":"gdgdsgdg,用友网络科技股份有限公司","billStatus":5,"billtype":"申请单测试","budgetMoney":800,"city":"北京","closed":false,"costProject":"BB6A6310-355C-4ED4-B6AF-3BE0309B0C50,申请预算","dealdate":1504800000000,"defitem1":"","defitem10":"","defitem11":"","defitem12":"","defitem13":"","defitem14":"","defitem15":"","defitem16":"","defitem17":"","defitem18":"","defitem19":"","defitem2":"","defitem20":"","defitem3":"","defitem4":"","defitem5":"","defitem6":"","defitem7":"","defitem8":"","defitem9":"","descript":"测试申请","djdl":"sq","djlxbm":"","djlxpk":"HaSCnBtnLlgM8FjRlDVq1","endDate":1504800000000,"errorMsg":"","id":58,"isClosed":false,"matter":"","money":800,"nodeBusinessTravelList":[],"overBudgetStatus":false,"pk":"xJSCSaIeF11AbtRVs1bWO","pkBill":"","pkMtappBill":"","reimburStatus":0,"restMoney":800,"startDate":1504800000000,"tag":"","tagPk":"","ts":1504834612000,"usedMoney":0,"userId":"0f791baa-144f-4e53-a91c-60568564edb0","valid":true,"zdyhead":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","zdyheadvalue":""},{"assumeDept":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办","assumeOrg":"gdgdsgdg,用友网络科技股份有限公司","billStatus":5,"billtype":"会议申请单","budgetMoney":500,"city":"上海","closed":false,"costProject":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","dealdate":1504108800000,"defitem1":"","defitem10":"","defitem11":"","defitem12":"","defitem13":"","defitem14":"","defitem15":"","defitem16":"","defitem17":"","defitem18":"","defitem19":"","defitem2":"","defitem20":"","defitem3":"","defitem4":"","defitem5":"","defitem6":"","defitem7":"","defitem8":"","defitem9":"","descript":"1","djdl":"sq","djlxbm":"","djlxpk":"zoSC2W79c2f6BBPgXTWmo","endDate":1504108800000,"errorMsg":"","id":40,"isClosed":false,"matter":"","money":500,"nodeBusinessTravelList":[],"overBudgetStatus":false,"pk":"4DSCVJkynClkLlhsV2xjy","pkBill":"","pkMtappBill":"","reimburStatus":0,"restMoney":500,"startDate":1504108800000,"tag":"","tagPk":"","ts":1504167159000,"usedMoney":0,"userId":"0f791baa-144f-4e53-a91c-60568564edb0","valid":true,"zdyhead":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","zdyheadvalue":""}]}';
		exit();
	}

	/**
	* 根据单据pk查询单据明细
	* get	/nodeBusinessTrip/getBusinessTripNode?pk=f2SCvrkokP6mSjm5o8a90
	*
	*/

	public function getBusinessTripNode() {
		echo '{"code":"0","information":{"assumeDept":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办","assumeOrg":"gdgdsgdg,gdgdsgdg","billStatus":5,"billtype":"申请单测试","budgetMoney":0,"city":"北京","closed":false,"costProject":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","dealdate":"2017-08-11","defitem1":"","defitem10":"","defitem11":"","defitem12":"","defitem13":"","defitem14":"","defitem15":"","defitem16":"","defitem17":"","defitem18":"","defitem19":"","defitem2":"","defitem20":"","defitem3":"","defitem4":"","defitem5":"","defitem6":"","defitem7":"","defitem8":"","defitem9":"","descript":"1","djdl":"sq","djlxbm":"","djlxpk":"zoSC2W79c2f6BBPgXTWmo","endDate":"2017-08-11","errorMsg":"","id":6,"isClosed":false,"matter":"","money":2064,"nodeBusinessTravelList":[{"alreadymny":0,"balancemny":0,"begindate":"2017-08-11","budgetMoney":0,"businesstripPk":"f2SCvrkokP6mSjm5o8a90","defitem1":"","defitem10":"","defitem11":"","defitem12":"","defitem13":"","defitem14":"","defitem15":"","defitem16":"","defitem17":"","defitem18":"","defitem19":"","defitem2":"","defitem20":"","defitem3":"","defitem4":"","defitem5":"","defitem6":"","defitem7":"","defitem8":"","defitem9":"","descript":"","enddate":"","fromCity":"北京西","hotelstandard":169,"id":160,"label":"","money":2064,"pk":"FlSC0i8yHjlnr1DZXirqN","project":"F5799D0B-2CB0-4800-B9C5-45E4830A2D7D,分公司项目","recordstatus":"0","recordtype":"sq_trip","restMoney":0,"staycity":"","szxm":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利","toCity":"北京南","tripDate":"","tripWay":"火车","ts":"2017-08-16","usedMoney":0,"userid":"0f791baa-144f-4e53-a91c-60568564edb0","valid":true,"ygcateringcost":50,"ygdays":6,"yghotelcost":1014,"ygtotalcost":0,"ygtrafficcost":1000}],"overBudgetStatus":false,"pk":"f2SCvrkokP6mSjm5o8a90","pkBill":"","pkMtappBill":"","reimburStatus":1,"restMoney":2,"startDate":"2017-08-11","tag":"","tagPk":"","ts":"2017-08-11","usedMoney":2062,"userId":"0f791baa-144f-4e53-a91c-60568564edb0","valid":true,"zdyhead":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目","zdyheadvalue":""}}';
		exit();
	}

	/**
	* 根据pk加载单据（单据数据和单据模块数据）
	* post	/nodeBusinessTrip/openBillByPk
	* {"pk":"f2SCvrkokP6mSjm5o8a90"}
	*/
	
	public function openBillByPk(){
		echo '{"code":"0","data":[{"source_edit":true,"source_input":true,"dest_property_name":"dealdate","source_type":"1300","source_code":"dealdate","source_name":"申请日期","source_value":"2017-08-11"},{"source_edit":true,"source_input":true,"dest_property_name":"project","source_type":"1500","source_code":"zdyhead","source_name":"项目","source_value":"BC5005F0-0B1E-4DDB-BC0E-F38EE59CA8AC,总部项目"},{"source_edit":true,"source_input":true,"dest_property_name":"feeitem","source_type":"1500","source_code":"costProject","source_name":"费用项目","source_value":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利"},{"source_edit":true,"source_input":true,"dest_property_name":"city","source_type":"1540","source_code":"city","source_name":"目的地","source_value":"北京"},{"source_edit":true,"source_input":true,"dest_property_name":"startDate","source_type":"1300","source_code":"startDate","source_name":"开始日期","source_value":"2017-08-11"},{"source_edit":true,"source_input":true,"dest_property_name":"endDate","source_type":"1300","source_code":"endDate","source_name":"结束日期","source_value":"2017-08-11"},{"source_edit":true,"source_input":true,"dest_property_name":"descript","source_type":"1000","source_code":"descript","source_name":"事由","source_value":"1"},{"source_edit":true,"source_input":true,"dest_property_name":"money","source_type":"1200","source_code":"money","source_name":"预计费用","source_value":"2064.00"},{"source_edit":false,"source_input":false,"dest_property_name":"usedMoney","source_type":"1200","source_code":"usedMoney","source_name":"已用费用","source_value":"2062.00"},{"source_edit":false,"source_input":false,"dest_property_name":"restMoney","source_type":"1200","source_code":"restMoney","source_name":"余额","source_value":"2.00"},{"source_edit":true,"source_input":true,"dest_property_name":"org","source_type":"1500","source_code":"assumeOrg","source_name":"费用承担单位","source_value":"gdgdsgdg,gdgdsgdg"},{"source_edit":true,"source_input":true,"dest_property_name":"dept","source_type":"1500","source_code":"assumeDept","source_name":"费用承担部门","source_value":"07CCB953-3F4F-4C33-9879-4E70C53A2F59,总裁办"}],"bodyInformation":[{"itemName":"sq_trip","defaultValue":[{"perset":{"begindate":{"dest_property_name":"begindate","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发日期"},"hotelstandard":{"dest_property_name":"hotelstandard","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"住宿标准"},"toCity":{"dest_property_name":"toCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"目的地"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"},"ygcateringcost":{"dest_property_name":"ygcateringcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估餐饮费用"},"ygtrafficcost":{"dest_property_name":"ygtrafficcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估交通费用"},"ygdays":{"dest_property_name":"ygdays","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估出差天数"},"yghotelcost":{"dest_property_name":"yghotelcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估住宿费"},"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估合计"},"fromCity":{"dest_property_name":"fromCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发地"},"tripWay":{"dest_property_name":"tripWay","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"交通工具"}},"defined":[]}],"itemValue":[{"perset":{"begindate":{"dest_property_name":"begindate","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发日期","source_value":"2017-08-11"},"hotelstandard":{"dest_property_name":"hotelstandard","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"住宿标准","source_value":"169.00"},"toCity":{"dest_property_name":"toCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"目的地","source_value":"北京南"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目","source_value":"F5799D0B-2CB0-4800-B9C5-45E4830A2D7D,分公司项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目","source_value":"498D53A4-150B-4B10-A411-D90BA6632B2C,福利"},"ygcateringcost":{"dest_property_name":"ygcateringcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估餐饮费用","source_value":"50.00"},"ygtrafficcost":{"dest_property_name":"ygtrafficcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估交通费用","source_value":"1000.00"},"ygdays":{"dest_property_name":"ygdays","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估出差天数","source_value":"6.00"},"yghotelcost":{"dest_property_name":"yghotelcost","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估住宿费","source_value":"1014.00"},"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"预估合计","source_value":"2064.00"},"fromCity":{"dest_property_name":"fromCity","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"出发地","source_value":"北京西"},"tripWay":{"dest_property_name":"tripWay","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"交通工具","source_value":"火车"}},"defined":[]}]},{"itemName":"sq_other","defaultValue":[{"perset":{"money":{"dest_property_name":"money","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"金额"},"project":{"dest_property_name":"project","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"项目"},"szxm":{"dest_property_name":"feeitem","formula":"","is_input":true,"is_edit":true,"is_show":true,"source_name":"费用项目"}},"defined":[]}],"itemValue":[]}],"otherData":{"djlxpk":"HaSCnBtnLlgM8FjRlDVq1","pkBill":null,"billStatus":"5","overBudgetStatus":"false","closed":false,"billitem":"申请单测试","dest_billtype":"","userId":"0f791baa-144f-4e53-a91c-60568564edb0","Djdl":"sq"},"successFlag":true}';
		exit();
	}

	/**
	* 根据pk收回单据
	* post	/nodeBusinessTrip/recoveryNodeBusTripBill
	* {"nodeBusTrippk":"f2SCvrkokP6mSjm5o8a90"}
	*
	*/
	public function recoveryNodeBusTripBill(){
		echo '{"code":"0","information":"收回成功"}';
		exit();
	}

	/**
	* 关闭单据
	* post	/application/closeApplicationForm
	* {"pk":"f2SCvrkokP6mSjm5o8a90","mark":"3"}
	*/
	public function closeApplicationForm(){
		echo '{"code":"0","information":"关闭申请单成功！"}';
		exit();
	}

	/**
	* 通过申请单pk查询记事
	* post	/application/getNodesByBillPk
	* {"pk":"f2SCvrkokP6mSjm5o8a90","mark":"3"}
	*/
	public function getNodesByBillPk(){
		echo '{"code":"0","data":[]}';
		exit();
	}
}
?>