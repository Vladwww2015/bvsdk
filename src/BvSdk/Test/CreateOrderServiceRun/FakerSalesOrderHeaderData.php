<?php
namespace BVSDK\BvSdk\Test\CreateOrderServiceRun;

class FakerSalesOrderHeaderData
{
    public static function generateFakeDataSalesOrderDetail()
    {
        $salesOrderDetail = [];

        $salesOrderDetail['RECNO'] = self::generateRandomNumber(4);
        $salesOrderDetail['WHSE'] = self::generateRandomString(6);
        $salesOrderDetail['CODE'] = self::generateRandomString(34);
        $salesOrderDetail['PROD_CODE'] = self::generateRandomString(10);
        $salesOrderDetail['INV_TAX_NO'] = self::generateRandomNumber(4);
        $salesOrderDetail['INV_TAX_PCT'] = self::generateRandomDecimal(4, 3);
        $salesOrderDetail['DISCOUNTABLE'] = self::generateRandomNumber(1);
        $salesOrderDetail['LINE_DISC'] = self::generateRandomDecimal(3, 3);
        $salesOrderDetail['LINE_DISC_AMT'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['ITEM_TYPE'] = self::generateRandomNumber(1);
        $salesOrderDetail['LAST_INV_DATE'] = self::generateRandomDate();
        $salesOrderDetail['PO_NUMBER'] = self::generateRandomString(10);

      /*  $salesOrderDetail['ORDD_DESCRIPTION'] = self::generateRandomString(80);
        $salesOrderDetail['EXTD_DESC'] = self::generateRandomNumber(1);
        $salesOrderDetail['COSTING_METHOD'] = self::generateRandomNumber(4);
        $salesOrderDetail['BVBUYUOM'] = self::generateRandomString(10);
        $salesOrderDetail['BVSTKUOM'] = self::generateRandomString(10);
        $salesOrderDetail['BVSELLUOM'] = self::generateRandomString(10);
        $salesOrderDetail['BVORDQTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVCMTDQTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVBOQTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVINVCMTDQTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVEXQTY1'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVSERQTY'] = self::generateRandomDecimal(6, 3);
        $salesOrderDetail['BVORDQTY_2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVCMTDQTY_2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVBOQTY_2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVINVCMTDQTY_2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVEXQTY1_2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVSERQTY_2'] = self::generateRandomDecimal(6, 3);
        $salesOrderDetail['BVRETAILPRICE'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVUNITPRICE'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVCURRENTCOSTPRICE'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVAVERAGECOSTPRICE'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVBASERETAILPRICE'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BVSTATUS'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVSPECPRICEFLAG'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVEXNUMPRICEFLAG1'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVEXNUMPRICEFLAG2'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVSLSTAXAPPFLAG1'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVSLSTAXAPPFLAG2'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVSLSTAXAPPFLAG3'] = self::generateRandomNumber(1);
        $salesOrderDetail['BVSLSTAXAPPFLAG4'] = self::generateRandomNumber(1);

        $salesOrderDetail['LOCN'] = self::generateRandomString(20);
        $salesOrderDetail['ITEM_NOTEPAD'] = self::generateRandomString(1);
        $salesOrderDetail['SERIAL_NO'] = self::generateRandomNumber(1);
        $salesOrderDetail['REQUIRED_DATE'] = self::generateRandomDate();
        $salesOrderDetail['SHIPPED_DATE'] = self::generateRandomDate();
        $salesOrderDetail['EX_AMT1'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['EX_AMT2'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['EX_NUM_FLAG1'] = self::generateRandomNumber(1);
        $salesOrderDetail['EX_NUM_FLAG2'] = self::generateRandomNumber(1);
        $salesOrderDetail['EX_NUM_FLAG3'] = self::generateRandomNumber(1);
        $salesOrderDetail['EX_NUM_FLAG4'] = self::generateRandomNumber(1);
        $salesOrderDetail['E_ORD_QTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_SHIP_QTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_OPEN_QTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_EX_QTY'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_LINE_OPEN_AMT'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_LINE_DISC_AMT'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_LINE_TOT_AMT'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['E_EX_AMT'] = self::generateRandomDecimal(8, 3);
        $salesOrderDetail['BV_GUID'] = self::generateRandomString(32);
        $salesOrderDetail['LAST_INV_NO'] = self::generateRandomString(10);
        $salesOrderDetail['EX_DETAIL_FILLER'] = self::generateRandomString(2);
        $salesOrderDetail['BVRVVERSION'] = self::generateRandomDecimal(4);
        $salesOrderDetail['BVRVMODDATE'] = self::generateRandomDate();
        $salesOrderDetail['BVRVMODTIME'] = self::generateRandomNumber(8);
        $salesOrderDetail['BVRVUSERINIT'] = self::generateRandomString(3);
        $salesOrderDetail['BVRVADDDATE'] = self::generateRandomDate();
        $salesOrderDetail['BVRVADDTIME'] = self::generateRandomNumber(8);
        $salesOrderDetail['BVRVADDUSERINIT'] = self::generateRandomString(3);
        $salesOrderDetail['COMMENT'] = self::generateRandomString(512);*/

        return $salesOrderDetail;
    }

    public static function generateFakeDataOrderAddress()
    {
        $orderAddress = [];
        $orderAddress['RECORD_TYPE'] = self::generateRandomString(4);
        $orderAddress['CEV_NO'] = self::generateRandomString(20);
        $orderAddress['ADDR_TYPE'] = self::generateRandomString(1);
        $orderAddress['ID'] = self::generateRandomString(20);
        $orderAddress['NAME'] = self::generateRandomString(60);
        $orderAddress['BVADDR1'] = self::generateRandomString(45);
        $orderAddress['BVADDR2'] = self::generateRandomString(45);
        $orderAddress['BVADDR3'] = self::generateRandomString(45);
        $orderAddress['BVADDR4'] = self::generateRandomString(45);
        $orderAddress['BVCITY'] = self::generateRandomString(45);
        $orderAddress['BVPROVSTATE'] = self::generateRandomString(2);
        $orderAddress['BVPOSTALCODE'] = self::generateRandomString(16);
        $orderAddress['BVCOUNTRYCODE'] = self::generateRandomString(3);
        $orderAddress['BVADDRTELNO1TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVADDRTELNO1'] = self::generateRandomString(30);
        $orderAddress['BVADDRTELNO2TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVADDRTELNO2'] = self::generateRandomString(30);
        $orderAddress['BVADDREMAIL'] = self::generateRandomString(80);
        $orderAddress['BVCOWEBPAGE'] = self::generateRandomString(80);
        $orderAddress['BVCOCONTACT1NAME'] = self::generateRandomString(60);
        $orderAddress['BVCOCONTACT1TEL1TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT1TEL1'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT1TEL2TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT1TEL2'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT1EMAIL'] = self::generateRandomString(80);
        $orderAddress['BVCOCONTACT2NAME'] = self::generateRandomString(60);
        $orderAddress['BVCOCONTACT2TEL1TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT2TEL1'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT2TEL2TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT2TEL2'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT2EMAIL'] = self::generateRandomString(80);
        $orderAddress['BVCOCONTACT3NAME'] = self::generateRandomString(60);
        $orderAddress['BVCOCONTACT3TEL1TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT3TEL1'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT3TEL2TYPE'] = self::generateRandomNumber(1);
        $orderAddress['BVCOCONTACT3TEL2'] = self::generateRandomString(30);
        $orderAddress['BVCOCONTACT3EMAIL'] = self::generateRandomString(80);
        $orderAddress['HOLD'] = self::generateRandomNumber(1);
        $orderAddress['SALES_TERR'] = self::generateRandomString(10);
        $orderAddress['SALES_TERR_DESC'] = self::generateRandomString(80);
        $orderAddress['SALES_PERSON'] = self::generateRandomString(10);
        $orderAddress['SLSPSN_NAME'] = self::generateRandomString(60);
        $orderAddress['SHIP_CODE'] = self::generateRandomString(10);
        $orderAddress['SHIP_DESC'] = self::generateRandomString(60);
        $orderAddress['DFLT_WHSE'] = self::generateRandomString(6);
        $orderAddress['RV_ACCOUNT'] = self::generateRandomString(24);
        $orderAddress['RV_TYPE'] = self::generateRandomNumber(1);
        $orderAddress['SELL_NO'] = self::generateRandomNumber(2);
        $orderAddress['BVSLSTAXNO1'] = self::generateRandomNumber(4);
        $orderAddress['BVSLSTAXNO2'] = self::generateRandomNumber(4);
        $orderAddress['BVSLSTAXNO3'] = self::generateRandomNumber(4);
        $orderAddress['BVSLSTAXNO4'] = self::generateRandomNumber(4);
        $orderAddress['BVSLSTAXEXEMPT1'] = self::generateRandomString(20);
        $orderAddress['BVSLSTAXEXEMPT2'] = self::generateRandomString(20);
        $orderAddress['BVSLSTAXEXEMPT3'] = self::generateRandomString(20);
        $orderAddress['BVSLSTAXEXEMPT4'] = self::generateRandomString(20);
        $orderAddress['NOTEPAD'] = self::generateRandomString(1);
        $orderAddress['NATIVE'] = self::generateRandomNumber(1);
        $orderAddress['BVRVVERSION'] = self::generateRandomDecimal(4);
        $orderAddress['BVRVMODDATE'] = self::generateRandomDate();
        $orderAddress['BVRVMODTIME'] = self::generateRandomNumber(8);
        $orderAddress['BVRVUSERINIT'] = self::generateRandomString(3);
        $orderAddress['BVRVADDDATE'] = self::generateRandomDate();
        $orderAddress['BVRVADDTIME'] = self::generateRandomNumber(8);
        $orderAddress['BVRVADDUSERINIT'] = self::generateRandomString(3);
        $orderAddress['BVEXCHARKEY1'] = self::generateRandomString(60);
        $orderAddress['BVEXCHARKEY2'] = self::generateRandomString(60);
        $orderAddress['BVEXCHARFIELD1'] = self::generateRandomString(60);
        $orderAddress['BVEXCHARFIELD2'] = self::generateRandomString(60);
        $orderAddress['BVEXAMTKEY1'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXAMTKEY2'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXAMTFIELD1'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXAMTFIELD2'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXPRICEKEY1'] = 1234223.0043;
//        $orderAddress['BVEXPRICEKEY1'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXPRICEKEY2'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXPRICEFIELD1'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXPRICEFIELD2'] = self::generateRandomDecimal(8);
        $orderAddress['BVEXCHARFLAGKEY1'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAGKEY2'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG1'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG2'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG3'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG4'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG5'] = self::generateRandomString(1);
        $orderAddress['BVEXCHARFLAG6'] = self::generateRandomString(1);
        $orderAddress['BVEXNUMFLAGKEY1'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAGKEY2'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG1'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG2'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG3'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG4'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG5'] = self::generateRandomNumber(1);
        $orderAddress['BVEXNUMFLAG6'] = self::generateRandomNumber(1);

        return $orderAddress;
    }


    public static function generateFakeDataSalesOrderHeader()
    {

        $statuses = array("O", "H", "Q", "S", "L");
        $priceCodes = array("A", "B", "C", "D");
        $currencies = array("USD", "EUR", "GBP", "JPY");
        $shippingMethods = array("UPS", "FedEx", "DHL");
        $deliveryTerms = array("FOB", "Your Dock", "CIF");

        $record = [];
        $record['NUMBER'] = 'HbDAZdtFW5';
//        $record['NUMBER'] = self::generateRandomString(10);
        $record['CUST_NO'] = 'RETAIL';
        $record['CUST_NAME'] = self::generateRandomString(60);
        $record['CUST_PO_NO'] = 'increment_id';
        $record['ORD_DATE'] = self::generateRandomDate();
        $record['STATUS'] = $statuses[array_rand($statuses)];
        $record['SLSPSN_NO'] = self::generateRandomString(10);
        $record['TERR_CODE'] = self::generateRandomString(10);
        $record['BVTERMSINFOCODE'] = self::generateRandomString(10);
        $record['BVCURRCODE'] = $currencies[array_rand($currencies)];
        $record['SHIP_VIA_CODE'] = $shippingMethods[array_rand($shippingMethods)];
        $record['FOB'] = $deliveryTerms[array_rand($deliveryTerms)];
        $record['PRICE_CODE'] = $priceCodes[array_rand($priceCodes)];
        $record['BVTOTAL'] = self::generateRandomDecimal(8);

//        $record['IN_DATE'] = self::generateRandomDate();
//        $record['REQD_DATE'] = self::generateRandomDate();
//        $record['PO_NO'] = self::generateRandomString(20);
//        $record['BVTERMSINFODESC'] = self::generateRandomString(60);
//        $record['BVADDR_RECTYPE'] = self::generateRandomString(4);
//        $record['BVADDR_CEV_NO'] = self::generateRandomString(20);
//        $record['BVADDR_ADDR_TYPE'] = self::generateRandomString(1);
//        $record['BVADDR_ID'] = self::generateRandomString(20);
//        $record['BVADDR_RECTYPE_2'] = self::generateRandomString(4);
//        $record['BVADDR_CEV_NO_2'] = self::generateRandomString(20);
//        $record['BVADDR_ADDR_TYPE_2'] = self::generateRandomString(1);
//        $record['BVADDR_ID_2'] = self::generateRandomString(20);
//        $record['BVCURRRATEMTHD'] = self::generateRandomString(1, "/*");
//        $record['BVSEQREF'] = self::generateRandomString(10);
//        $record['PACK_DATE'] = self::generateRandomDate();
//        $record['PACK_INIT'] = self::generateRandomString(3);
//        $record['SHIP_LABELS_DATE'] = self::generateRandomDate();
//        $record['SHIP_LABELS_INIT'] = self::generateRandomString(3);
//        $record['SPEC_HANDLING'] = self::generateRandomString(60);
//        $record['BVCRCARDNO'] = self::generateRandomString(20);
//        $record['BVCRCARDNAME'] = self::generateRandomString(60);
//        $record['BVCRCARDAUTH'] = self::generateRandomString(20);
//        $record['LWAY_LAST_DEP_DATE'] = self::generateRandomDate();
//        $record['ORIG_QUOTE_NO'] = self::generateRandomString(10);
//        $record['NOTEPAD'] = self::generateRandomString(1, "X");
//        $record['E_DOWNLOAD_DATE'] = self::generateRandomDate();
//        $record['E_DOWNLOAD_USER'] = self::generateRandomString(3);
//        $record['BVCRCARDNO_2'] = self::generateRandomString(20);
//        $record['BVCRCARDNAME_2'] = self::generateRandomString(60);
//        $record['BVCRCARDAUTH_2'] = self::generateRandomString(20);
//        $record['EX_DATE'] = self::generateRandomDate();
//        $record['EX_CHAR_FLAG_1'] = self::generateRandomString(1);
//        $record['EX_CHAR_FLAG_2'] = self::generateRandomString(1);
//        $record['EX_CHAR_FLAG_3'] = self::generateRandomString(1);
//        $record['LAST_INV_NO'] = self::generateRandomString(10);
//        $record['LAST_INV_DATE'] = self::generateRandomDate();
//        $record['PMT_METHOD_FLAG'] = self::generateRandomString(1);
//        $record['PMT_METHOD'] = self::generateRandomString(1);
//        $record['USER_CREATED'] = self::generateRandomString(3);
//        $record['BVRVMODDATE'] = self::generateRandomDate();
//        $record['BVRVUSERINIT'] = self::generateRandomString(3);
//        $record['BVRVADDDATE'] = self::generateRandomDate();
//        $record['BVRVADDUSERINIT'] = self::generateRandomString(3);
//        $record['BVTOTAL'] = self::generateRandomDecimal(8);
//
//        $record['SLS_COMM_APP_AMT'] = self::generateRandomDecimal(8);
//        $record['SLS_COMM_PCT'] = self::generateRandomDecimal(3);
//        $record['SLS_COMM_AMT'] = self::generateRandomDecimal(8);
//        $record['DISC'] = self::generateRandomDecimal(3);
//        $record['BVCURRRATEAMT'] = self::generateRandomDecimal(7);
//        $record['BVDAYSBEFOREDUE01'] = self::generateRandomDecimal(2);
//        $record['BVMINDAYS01'] = self::generateRandomDecimal(2);
//        $record['BVDISCDAYSALLOWED01'] = self::generateRandomDecimal(2);
//        $record['BVDISCMINDAYS01'] = self::generateRandomDecimal(2);
//        $record['BVDISCRATE01'] = self::generateRandomDecimal(3);
//        $record['BVDAYSBEFOREDUE02'] = self::generateRandomDecimal(2);
//        $record['BVMINDAYS02'] = self::generateRandomDecimal(2);
//        $record['BVDISCDAYSALLOWED02'] = self::generateRandomDecimal(2);
//        $record['BVDISCMINDAYS02'] = self::generateRandomDecimal(2);
//        $record['BVDISCRATE02'] = self::generateRandomDecimal(3);
//        $record['BVSLSTAXPCT1'] = self::generateRandomDecimal(4);
//        $record['BVSLSTAXPCT2'] = self::generateRandomDecimal(4);
//        $record['BVSLSTAXPCT3'] = self::generateRandomDecimal(4);
//        $record['BVSLSTAXPCT4'] = self::generateRandomDecimal(4);
//        $record['BVSLSTAXAPPAMT1'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXAPPAMT2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXAPPAMT3'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXAPPAMT4'] = self::generateRandomDecimal(8);
//        $record['LWAY_LAST_DEP_AMT'] = self::generateRandomDecimal(8);
//        $record['LWAY_TOTAL_PAID'] = self::generateRandomDecimal(8);
//        $record['BVSUBTOTAL'] = self::generateRandomDecimal(8);
//        $record['BVDISCOUNT'] = self::generateRandomDecimal(8);
//        $record['BVSHIPPING'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT1'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT3'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT4'] = self::generateRandomDecimal(8);
//        $record['BVSALESTAX'] = self::generateRandomDecimal(8);
//        $record['BVGROSSPROFIT'] = self::generateRandomDecimal(8);
//        $record['BVCURRENTCOST'] = self::generateRandomDecimal(8);
//        $record['BVAVERAGECOST'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT4'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT5'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT6'] = self::generateRandomDecimal(8);
//        $record['BVSUBTOTAL_2'] = self::generateRandomDecimal(8);
//        $record['BVDISCOUNT_2'] = self::generateRandomDecimal(8);
//        $record['BVSHIPPING_2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT1_2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT2_2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT3_2'] = self::generateRandomDecimal(8);
//        $record['BVSLSTAXTOTAMT4_2'] = self::generateRandomDecimal(8);
//        $record['BVSALESTAX_2'] = self::generateRandomDecimal(8);
//        $record['BVGROSSPROFIT_2'] = self::generateRandomDecimal(8);
//        $record['BVCURRENTCOST_2'] = self::generateRandomDecimal(8);
//        $record['BVAVERAGECOST_2'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT4_2'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT5_2'] = self::generateRandomDecimal(8);
//        $record['BVORDTOTAMT6_2'] = self::generateRandomDecimal(8);
//        $record['BVTOTAL_2'] = self::generateRandomDecimal(8);
//        $record['EX_AMT_1'] = self::generateRandomDecimal(8);
//        $record['EX_AMT_2'] = self::generateRandomDecimal(8);
//        $record['EX_AMT_3'] = self::generateRandomDecimal(8);
//        $record['EX_PERCENT'] = self::generateRandomDecimal(3);
//
//        $record['SLS_COMM_FLAG'] = self::generateRandomNumber(1);
//        $record['DISC_OK'] = self::generateRandomNumber(1);
//        $record['LINE_DISC_OK'] = self::generateRandomNumber(1);
//        $record['BVDOUBLETERMS'] = self::generateRandomNumber(1);
//        $record['BVDAYOFMONTH01'] = self::generateRandomNumber(1);
//        $record['BVDISCDAYOFMONTH01'] = self::generateRandomNumber(1);
//        $record['BVDISCMETHOD01'] = self::generateRandomNumber(1);
//        $record['BVDAYOFMONTH02'] = self::generateRandomNumber(1);
//        $record['BVDISCDAYOFMONTH02'] = self::generateRandomNumber(1);
//        $record['BVDISCMETHOD02'] = self::generateRandomNumber(1);
//        $record['SHIP_TO_SELF'] = self::generateRandomNumber(1);
//        $record['PRINT_PACK'] = self::generateRandomNumber(1);
//        $record['PRINT_SHIP_LABELS'] = self::generateRandomNumber(1);
//        $record['STARSHIP_RECORD'] = self::generateRandomNumber(1);
//        $record['BVDRCARD'] = self::generateRandomNumber(1);
//        $record['LWAY_FLAG'] = self::generateRandomNumber(1);
//        $record['WAS_QUOTE'] = self::generateRandomNumber(1);
//        $record['SERIALIZED_ITEMS'] = self::generateRandomNumber(1);
//        $record['PRIORITY'] = self::generateRandomNumber(1);
//        $record['E_ORDER'] = self::generateRandomNumber(1);
//        $record['E_GUEST'] = self::generateRandomNumber(1);
//        $record['E_STATUS'] = self::generateRandomNumber(1);
//        $record['E_CREDIT_CARD_NO'] = self::generateRandomNumber(1);
//        $record['E_TRUNCATION'] = self::generateRandomNumber(1);
//        $record['E_MORE_INFO'] = self::generateRandomNumber(1);
//        $record['E_DL_INFO_AVAIL'] = self::generateRandomNumber(1);
//        $record['BVDRCARD_2'] = self::generateRandomNumber(1);
//        $record['EX_FLAG_3'] = self::generateRandomNumber(1);
//        $record['DISC_ON_NETAMT'] = self::generateRandomNumber(1);
//        $record['INCLUDE_FREIGHT'] = self::generateRandomNumber(1);
//        $record['E_SHIPPING'] = self::generateRandomNumber(1);
//        $record['BVCRCARDEXPMM'] = self::generateRandomNumber(2);
//        $record['BVCRCARDEXPYY'] = self::generateRandomNumber(2);
//        $record['BVCRCARDEXPMM_2'] = self::generateRandomNumber(2);
//        $record['BVCRCARDEXPYY_2'] = self::generateRandomNumber(2);
//
//        $record['BVREQREC'] = self::generateRandomNumber(4);
//        $record['E_ORDER_NO'] = self::generateRandomNumber(4);
//        $record['BVRVVERSION'] = self::generateRandomDecimal(4);
//        $record['STARSHIP_SERIAL'] = self::generateRandomNumber(6);
//        $record['E_DOWNLOAD_TIME'] = self::generateRandomNumber(8);
//        $record['BVRVMODTIME'] = self::generateRandomNumber(8);
//        $record['BVRVADDTIME'] = self::generateRandomNumber(8);
        return $record;
    }

    public static function generateRandomString($length, $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789')
    {
        $str = '';
        $charCount = strlen($chars);

        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $charCount - 1)];
        }

        return $str;
    }

    public static function generateRandomNumber($length)
    {
        return rand(pow(10, $length - 1), pow(10, $length) - 1);
    }

    public static function generateRandomDecimal($length)
    {
        return number_format(rand(0, pow(10, $length) - 1) / pow(10, $length), 5, '.', '');
    }

    public static function generateRandomDate()
    {
        $start = strtotime('2010-01-01');
        $end = strtotime('2023-12-31');
        $timestamp = mt_rand($start, $end);
        return date('Ymd', $timestamp);
    }

}
