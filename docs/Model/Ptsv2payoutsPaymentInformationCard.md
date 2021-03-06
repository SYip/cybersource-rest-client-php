# Ptsv2payoutsPaymentInformationCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover | [optional] 
**number** | **string** | Customer’s credit card number. Encoded Account Numbers when processing encoded account numbers, use this field for the encoded account number.  For processor-specific information, see the customer_cc_number field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**expirationMonth** | **string** | Two-digit month in which the credit card expires. &#x60;Format: MM&#x60;. Possible values: 01 through 12.  **Encoded Account Numbers**  For encoded account numbers (_type_&#x3D;039), if there is no expiration date on the card, use 12.  For processor-specific information, see the customer_cc_expmo field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**expirationYear** | **string** | Four-digit year in which the credit card expires. &#x60;Format: YYYY&#x60;.  **Encoded Account Numbers**  For encoded account numbers (_type_&#x3D;039), if there is no expiration date on the card, use 2021.  For processor-specific information, see the customer_cc_expyr field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html) | [optional] 
**sourceAccountType** | **string** | Flag that specifies the type of account associated with the card. The cardholder provides this information during the payment process. This field is required in the following cases.   - Debit transactions on Cielo and Comercio Latino.   - Transactions with Brazilian-issued cards on CyberSource through VisaNet.   - Applicable only for CTV.      **Note** Combo cards in Brazil contain credit and debit functionality in a single card. Visa systems use a credit bank identification number (BIN) for this type of card. Using the BIN to determine whether a card is debit or credit can cause transactions with these cards to be processed incorrectly. CyberSource strongly recommends that you include this field for combo card transactions.  Possible values include the following.   - CHECKING: Checking account  - CREDIT: Credit card account  - SAVING: Saving account  - LINE_OF_CREDIT: Line of credit  - PREPAID: Prepaid card account  - UNIVERSAL: Universal account | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


