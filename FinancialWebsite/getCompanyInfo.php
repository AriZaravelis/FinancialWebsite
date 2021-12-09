<?php
if(isset($_GET['id'])){
    
    $id = intval($_GET['id']); //Retrieve id from URL and assigns to variable id.
    
    //Establishes a connection with my database named financcialdb.
    $conn = mysqli_connect('localhost', 'root', '7698frza', "financialdb");
    
    
    $query1 = mysqli_query($conn, "SELECT * FROM company WHERE id=$id"); //Query for obtaining company info.
    while($row = mysqli_fetch_array($query1)){
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $sector = $row['sector'];
        $industry = $row['industry'];
        $employees = $row['employees'];
        $dateFounded = $row['dateFounded'];
        $address = $row['address'];
        $phoneNum = $row['phoneNum'];
        $website = $row['website'];
    }
    
    
    
    $query2 = mysqli_query($conn, "SELECT * FROM incomestatement WHERE companyId=$id"); //Query for obtaining company income statements.
    while($row = mysqli_fetch_array($query2)){
        $incomeStatementId[] = array($row['incomeStatementId']);
        $companyId[] = array($row['companyId']);
        $year[] = array($row['year']);
        $revenues[] = array($row['revenues']);
        $otherRevenues[] = array($row['otherRevenues']);
        $totalRevenues[] = array($row['totalRevenues']);
        $costOfRevenues[] = array($row['costOfRevenues']);
        $grossProfit[] = array($row['grossProfit']);
        $totalOperatingExpenses[] = array($row['totalOperatingExpenses']);
        $operatingIncome[] = array($row['operatingIncome']);
        $netInterestExpenses[] = array($row['netInterestExpenses']);
        $incomeTaxExpense[] = array($row['incomeTaxExpense']);
        $earningsFromContinuingOperations[] = array($row['earningsFromContinuingOperations']);
        $netIncome[] = array($row['netIncome']);
        $niToCommonExcl[] = array($row['niToCommonExcl']);
    }
    
    
    
    $query3 = mysqli_query($conn, "SELECT * FROM balancesheet WHERE companyId=$id"); //Query for obtaining company balance sheets.
    while($row = mysqli_fetch_array($query3)){
        $balanceSheetId[] = array($row['balanceSheetId']);
        $companyId[] = array($row['companyId']);
        $year[] = array($row['year']);
        $totalCashAndSTInvestments[] = array($row['totalCashAndSTInvestments']);
        $totalReceivables[] = array($row['totalReceivables']);
        $totalCurrentAssets[] = array($row['totalCurrentAssets']);
        $netPropertyPlantAndEquipment[] = array($row['netPropertyPlantAndEquipment']);
        $totalAssets[] = array($row['totalAssets']);
        $totalCurrentLiabilities[] = array($row['totalCurrentLiabilities']);
        $totalLiabilities[] = array($row['totalLiabilities']);
        $totalCommonEquity[] = array($row['totalCommonEquity']);
        $totalEquity[] = array($row['totalEquity']);
        $totalLiabilitiesAndEquity[] = array($row['totalLiabilitiesAndEquity']);
    }
    
    
    
    $query4 = mysqli_query($conn, "SELECT * FROM cashflowstatement WHERE companyId=$id"); //Query for obtaining cash flow statements.
    while($row = mysqli_fetch_array($query4)){
        $cashFlowStatementId[] = array($row['cashFlowStatementId']);
        $companyId[] = array($row['companyId']);
        $year[] = array($row['year']);
        $totalDepreciationAndAmortization[] = array($row['totalDepreciationAndAmortization']);
        $cashFromOperations[] = array($row['cashFromOperations']);
        $cashFromInvesting[] = array($row['cashFromInvesting']);
        $totalDebtIssued[] = array($row['totalDebtIssued']);
        $totalDebtRepaid[] = array($row['totalDebtRepaid']);
        $cashFromFinancing[] = array($row['cashFromFinancing']);
        $netChangeInCash[] = array($row['netChangeInCash']);
    }
}
else {
    $id = '';
    $name = '';
    $description = '';
    $sector = '';
    $industry = '';
    $employees = '';
    $dateFounded = '';
    $address = '';
    $phoneNum = '';
    $website = '';

}
?>