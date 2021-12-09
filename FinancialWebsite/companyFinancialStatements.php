<?php
include("getCompanyInfo.php"); //Include the file for obtaining company information.
?>

<!DOCTYPE html>
    <head>
        <title>Financial Website</title>
        <link rel="stylesheet" href="instantSearch.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google material icons that are free to use. -->
    </head>
    
    
    <header>
        <div class="results">
            <div class="resultsContent">
                <form action="" method="GET" name="">
                    <div class="instantSearch">
                        <div class="instantSearchInputContainer"> <!--Holds a container for the input as well as the magnifying glass icon. -->
                            <input class="instantSearchInput" type="text" name="k" placeholder="Search Company" autocomplete="off" spellcheck="false">
                            <i class="material-icons instant-search__icon">search</i> <!--This is the search icon from the Google material icons that are free to use. -->
                        </div>
                    </div>
                </form>
                <?php
                include("searchResults.php");
                ?>
            </div>
        </div>
        
        <div class="topMenu">
            <div class="menuItems">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About Me</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    
    <body>
        
        <h1><?php echo $name; ?></h1>
        <h2> Overview </h2>
        <h3> Company Profile </h3>

        <div class= "overviewBody">
            <p><?php echo $description; ?></p>
        </div>


        <table class="overviewTable">
            <tr>
                <td align="left">Sector</td>
                <td align="right"><?php echo $sector; ?></td>
            </tr>
            <tr>
                <td align="left">Industry</td>
                <td align="right"><?php echo $industry; ?></td>
            </tr>
            <tr title="Represents the number of both full- and part-time employees of the company">
                <td align="left">Employees</td>
                <td align="right"><?php echo $employees; ?></td>
            </tr>
            <tr title="The year the company was founded">
                <td align="left">Founded</td>
                <td align="right"><?php echo $dateFounded; ?></td>
            </tr>
            <tr title="The current location of the corporate offices: One Apple Park Way Cupertino, CA, 95014 United States">
                <td align="left">Address
                    <br>
                    (<a href="https://www.google.com/maps?q=<?php echo $address; ?>" target="_blank">view map</a>)
                </td>
                <td align="right"><?php echo $address; ?></td>
            </tr>
            <tr title="The phone number/fax number at which the investor relations officer can be reached">
                <td align="left">Phone Number</td>
                <td align="right"><?php echo $phoneNum; ?></td>
            </tr>
            <tr title="Website address from latest report">
                <td align="left">Website</td>
                <td align="right">
                    <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a>
                </td>
            </tr>
        </table>


        <?php
        error_reporting(0);
        ?>

        <h2> Financial Statements </h2>


        <table class="incomeStatementsTable">
            <h3> Income Statement </h3>
            <tr>
                <td></td>
                <td><?php echo implode($year[0]); ?></td>
                <td><?php echo implode($year[1]); ?></td>
                <td><?php echo implode($year[2]); ?></td>
                <td><?php echo implode($year[3]); ?></td>
                <td><?php echo implode($year[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Revenues</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Revenues</td>
                <td><?php echo implode($revenues[0]); ?></td>
                <td><?php echo implode($revenues[1]); ?></td>
                <td><?php echo implode($revenues[2]); ?></td>
                <td><?php echo implode($revenues[3]); ?></td>
                <td><?php echo implode($revenues[4]); ?></td>
            </tr>
            <tr>
                <td>Other Revenues</td>
                <td><?php echo implode($otherRevenues[0]); ?></td>
                <td><?php echo implode($otherRevenues[1]); ?></td>
                <td><?php echo implode($otherRevenues[2]); ?></td>
                <td><?php echo implode($otherRevenues[3]); ?></td>
                <td><?php echo implode($otherRevenues[4]); ?></td>
            </tr>
            <tr>
                <td>Total Revenues</td>
                <td><?php echo implode($totalRevenues[0]); ?></td>
                <td><?php echo implode($totalRevenues[1]); ?></td>
                <td><?php echo implode($totalRevenues[2]); ?></td>
                <td><?php echo implode($totalRevenues[3]); ?></td>
                <td><?php echo implode($totalRevenues[4]); ?></td>
            </tr>
            <tr>
                <td>Cost Of Revenues</td>
                <td><?php echo implode($costOfRevenues[0]); ?></td>
                <td><?php echo implode($costOfRevenues[1]); ?></td>
                <td><?php echo implode($costOfRevenues[2]); ?></td>
                <td><?php echo implode($costOfRevenues[3]); ?></td>
                <td><?php echo implode($costOfRevenues[4]); ?></td>
            </tr>
            <tr>
                <td>Gross Profit</td>
                <td><?php echo implode($grossProfit[0]); ?></td>
                <td><?php echo implode($grossProfit[1]); ?></td>
                <td><?php echo implode($grossProfit[2]); ?></td>
                <td><?php echo implode($grossProfit[3]); ?></td>
                <td><?php echo implode($grossProfit[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Operating Expenses & Income</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Operating Expenses</td>
                <td><?php echo implode($totalOperatingExpenses[0]); ?></td>
                <td><?php echo implode($totalOperatingExpenses[1]); ?></td>
                <td><?php echo implode($totalOperatingExpenses[2]); ?></td>
                <td><?php echo implode($totalOperatingExpenses[3]); ?></td>
                <td><?php echo implode($totalOperatingExpenses[4]); ?></td>
            </tr>
            <tr>
                <td>Operating Income</td>
                <td><?php echo implode($operatingIncome[0]); ?></td>
                <td><?php echo implode($operatingIncome[1]); ?></td>
                <td><?php echo implode($operatingIncome[2]); ?></td>
                <td><?php echo implode($operatingIncome[3]); ?></td>
                <td><?php echo implode($operatingIncome[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Earnings from Continuing Operations</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Net Interest Expenses</td>
                <td><?php echo implode($netInterestExpenses[0]); ?></td>
                <td><?php echo implode($netInterestExpenses[1]); ?></td>
                <td><?php echo implode($netInterestExpenses[2]); ?></td>
                <td><?php echo implode($netInterestExpenses[3]); ?></td>
                <td><?php echo implode($netInterestExpenses[4]); ?></td>
            </tr>
            <tr>
                <td>Income Tax Expense</td>
                <td><?php echo implode($incomeTaxExpense[0]); ?></td>
                <td><?php echo implode($incomeTaxExpense[1]); ?></td>
                <td><?php echo implode($incomeTaxExpense[2]); ?></td>
                <td><?php echo implode($incomeTaxExpense[3]); ?></td>
                <td><?php echo implode($incomeTaxExpense[4]); ?></td>
            </tr>
            <tr>
                <td>Earnings From Continuing Operations</td>
                <td><?php echo implode($earningsFromContinuingOperations[0]); ?></td>
                <td><?php echo implode($earningsFromContinuingOperations[1]); ?></td>
                <td><?php echo implode($earningsFromContinuingOperations[2]); ?></td>
                <td><?php echo implode($earningsFromContinuingOperations[3]); ?></td>
                <td><?php echo implode($earningsFromContinuingOperations[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Net Income</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Net Income</td>
                <td><?php echo implode($netIncome[0]); ?></td>
                <td><?php echo implode($netIncome[1]); ?></td>
                <td><?php echo implode($netIncome[2]); ?></td>
                <td><?php echo implode($netIncome[3]); ?></td>
                <td><?php echo implode($netIncome[4]); ?></td>
            </tr>
            <tr>
                <td>NI to Common Excl. Extra Items</td>
                <td><?php echo implode($niToCommonExcl[0]); ?></td>
                <td><?php echo implode($niToCommonExcl[1]); ?></td>
                <td><?php echo implode($niToCommonExcl[2]); ?></td>
                <td><?php echo implode($niToCommonExcl[3]); ?></td>
                <td><?php echo implode($niToCommonExcl[4]); ?></td>
            </tr>
        </table>

            


        <table class="balanceSheetsTable">
            <h3> Balance Sheet </h3>
            <tr>
                <td></td>
                <td><?php echo implode($year[0]); ?></td>
                <td><?php echo implode($year[1]); ?></td>
                <td><?php echo implode($year[2]); ?></td>
                <td><?php echo implode($year[3]); ?></td>
                <td><?php echo implode($year[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Cash & Short Term Investments</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Cash & ST Investments</td>
                <td><?php echo implode($totalCashAndSTInvestments[0]); ?></td>
                <td><?php echo implode($totalCashAndSTInvestments[1]); ?></td>
                <td><?php echo implode($totalCashAndSTInvestments[2]); ?></td>
                <td><?php echo implode($totalCashAndSTInvestments[3]); ?></td>
                <td><?php echo implode($totalCashAndSTInvestments[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Receivables</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Receivables</td>
                <td><?php echo implode($totalReceivables[0]); ?></td>
                <td><?php echo implode($totalReceivables[1]); ?></td>
                <td><?php echo implode($totalReceivables[2]); ?></td>
                <td><?php echo implode($totalReceivables[3]); ?></td>
                <td><?php echo implode($totalReceivables[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Current Assets</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Current Assets</td>
                <td><?php echo implode($totalCurrentAssets[0]); ?></td>
                <td><?php echo implode($totalCurrentAssets[1]); ?></td>
                <td><?php echo implode($totalCurrentAssets[2]); ?></td>
                <td><?php echo implode($totalCurrentAssets[3]); ?></td>
                <td><?php echo implode($totalCurrentAssets[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Long-Term Assets</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Net Property, Plant & Equipment</td>
                <td><?php echo implode($netPropertyPlantAndEquipment[0]); ?></td>
                <td><?php echo implode($netPropertyPlantAndEquipment[1]); ?></td>
                <td><?php echo implode($netPropertyPlantAndEquipment[2]); ?></td>
                <td><?php echo implode($netPropertyPlantAndEquipment[3]); ?></td>
                <td><?php echo implode($netPropertyPlantAndEquipment[4]); ?></td>
            </tr>
            <tr>
                <td>Total Assets</td>
                <td><?php echo implode($totalAssets[0]); ?></td>
                <td><?php echo implode($totalAssets[1]); ?></td>
                <td><?php echo implode($totalAssets[2]); ?></td>
                <td><?php echo implode($totalAssets[3]); ?></td>
                <td><?php echo implode($totalAssets[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Current Liabilities</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Current Liabilities</td>
                <td><?php echo implode($totalCurrentLiabilities[0]); ?></td>
                <td><?php echo implode($totalCurrentLiabilities[1]); ?></td>
                <td><?php echo implode($totalCurrentLiabilities[2]); ?></td>
                <td><?php echo implode($totalCurrentLiabilities[3]); ?></td>
                <td><?php echo implode($totalCurrentLiabilities[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Long-Term Liabilities</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Liabilities</td>
                <td><?php echo implode($totalLiabilities[0]); ?></td>
                <td><?php echo implode($totalLiabilities[1]); ?></td>
                <td><?php echo implode($totalLiabilities[2]); ?></td>
                <td><?php echo implode($totalLiabilities[3]); ?></td>
                <td><?php echo implode($totalLiabilities[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Common Equity</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Common Equity</td>
                <td><?php echo implode($totalCommonEquity[0]); ?></td>
                <td><?php echo implode($totalCommonEquity[1]); ?></td>
                <td><?php echo implode($totalCommonEquity[2]); ?></td>
                <td><?php echo implode($totalCommonEquity[3]); ?></td>
                <td><?php echo implode($totalCommonEquity[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Stockholders' Equity</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Equity</td>
                <td><?php echo implode($totalEquity[0]); ?></td>
                <td><?php echo implode($totalEquity[1]); ?></td>
                <td><?php echo implode($totalEquity[2]); ?></td>
                <td><?php echo implode($totalEquity[3]); ?></td>
                <td><?php echo implode($totalEquity[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Liabilities & Equity</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Liabilities And Equity</td>
                <td><?php echo implode($totalLiabilitiesAndEquity[0]); ?></td>
                <td><?php echo implode($totalLiabilitiesAndEquity[1]); ?></td>
                <td><?php echo implode($totalLiabilitiesAndEquity[2]); ?></td>
                <td><?php echo implode($totalLiabilitiesAndEquity[3]); ?></td>
                <td><?php echo implode($totalLiabilitiesAndEquity[4]); ?></td>
            </tr>
        </table>



        <table class="cashFlowStatementsTable">
            <h3> Cash Flow Statement </h3>
            <tr>
                <td></td>
                <td><?php echo implode($year[0]); ?></td>
                <td><?php echo implode($year[1]); ?></td>
                <td><?php echo implode($year[2]); ?></td>
                <td><?php echo implode($year[3]); ?></td>
                <td><?php echo implode($year[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Cash Flow From Operating Activities</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Depreciation And Amortization</td>
                <td><?php echo implode($totalDepreciationAndAmortization[0]); ?></td>
                <td><?php echo implode($totalDepreciationAndAmortization[1]); ?></td>
                <td><?php echo implode($totalDepreciationAndAmortization[2]); ?></td>
                <td><?php echo implode($totalDepreciationAndAmortization[3]); ?></td>
                <td><?php echo implode($totalDepreciationAndAmortization[4]); ?></td>
            </tr>
            <tr>
                <td>Cash From Operations</td>
                <td><?php echo implode($cashFromOperations[0]); ?></td>
                <td><?php echo implode($cashFromOperations[1]); ?></td>
                <td><?php echo implode($cashFromOperations[2]); ?></td>
                <td><?php echo implode($cashFromOperations[3]); ?></td>
                <td><?php echo implode($cashFromOperations[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Cash Flow From Investing Activities</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Cash From Investing</td>
                <td><?php echo implode($cashFromInvesting[0]); ?></td>
                <td><?php echo implode($cashFromInvesting[1]); ?></td>
                <td><?php echo implode($cashFromInvesting[2]); ?></td>
                <td><?php echo implode($cashFromInvesting[3]); ?></td>
                <td><?php echo implode($cashFromInvesting[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Cash Flow From Financing Activities</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Total Debt Issued</td>
                <td><?php echo implode($totalDebtIssued[0]); ?></td>
                <td><?php echo implode($totalDebtIssued[1]); ?></td>
                <td><?php echo implode($totalDebtIssued[2]); ?></td>
                <td><?php echo implode($totalDebtIssued[3]); ?></td>
                <td><?php echo implode($totalDebtIssued[4]); ?></td>
            </tr>
            <tr>
                <td>Total Debt Repaid</td>
                <td><?php echo implode($totalDebtRepaid[0]); ?></td>
                <td><?php echo implode($totalDebtRepaid[1]); ?></td>
                <td><?php echo implode($totalDebtRepaid[2]); ?></td>
                <td><?php echo implode($totalDebtRepaid[3]); ?></td>
                <td><?php echo implode($totalDebtRepaid[4]); ?></td>
            </tr>
            <tr>
                <td>Cash From Financing</td>
                <td><?php echo implode($cashFromFinancing[0]); ?></td>
                <td><?php echo implode($cashFromFinancing[1]); ?></td>
                <td><?php echo implode($cashFromFinancing[2]); ?></td>
                <td><?php echo implode($cashFromFinancing[3]); ?></td>
                <td><?php echo implode($cashFromFinancing[4]); ?></td>
            </tr>
            <tr>
                <td><h4>Change In Cash & Equivalents</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Net Change In Cash</td>
                <td><?php echo implode($netChangeInCash[0]); ?></td>
                <td><?php echo implode($netChangeInCash[1]); ?></td>
                <td><?php echo implode($netChangeInCash[2]); ?></td>
                <td><?php echo implode($netChangeInCash[3]); ?></td>
                <td><?php echo implode($netChangeInCash[4]); ?></td>
            </tr>
        </table>


        
        <hr><center>Data provided by the SEC, S&P Global Market Intelligence, etc.</center><br><center>© 2021 Ari Zaravelis. All rights reserved</center></hr>


    </body>


</html>