# 安全程式設計與駭客攻防的期末專案
## WEB SECURITY AND MAN IN THE MIDDLE ATTACK
### 組員分工
| 1092950林佳笙          | 1093332商東峻      | 1094841李昱佑       |
| ------------------ | -------------- | -------------- |
| DNSSpoofing整理 | 網站漏洞整理   | <font color=red>**弱點系統撰寫(此專案)**</font>  |
| 攻擊DEMO        | 惡意伺服器架設 | 弱點伺服器架設 |
|                    |                |      攻擊DEMO          |
### 摘要
* 本專案為111年安全程式設計與駭客攻防期末專案中的子專案。是本組為了研究網站弱點成因與防禦弱點，所設計與實作的購物網站。
* 本專案提供 [docker-compose.yml](docker-compose.yml)，供大家可以方便地架設此系統，透過此系統與本專案的提供的[書面報告](written_report/secpro111_3.pdf)、[報告投影片](written_report/ppt/安全程設-期末報告.pptx)與[Demo影片](https://www.youtube.com/playlist?list=PLlDAg2OMNro45wriUOYRpLBdj4mP4ZhXz)去了解網站的弱點與防禦問題。
### 系統簡介
* 此系統的主題為**嘉大鞋子購物網站**，此網站提供了許多方便使用者瀏覽鞋子的功能，其中有依照類別過濾鞋子的功能，也有透過關鍵字搜尋鞋子的功能。同時，使用者也可以觀看鞋子的介紹與查詢每雙鞋子在每間分店的庫存量。在實作漏洞的同時，我們也模擬了許多真實網頁會有的功能。
* 此系統的撰寫使用 PHP8 撰寫後端，並使用 HTML、CSS 與 JavaScript 撰寫前端。資料庫系統則是使用 MySQL，而網頁伺服器是使用 Apache2。環境的建立，我們特別採用了 Docker-compose 來建立多個容器，使開發時更為方便。若想要啟動我們的系統，也可以透過簡單的 docker 指令快速建立一模一樣的環境。
### 網站弱點重現的項目
* Union Attack 
* Blind SQL Injection
* DOM XSS  
* XXE Injection
* 任意檔案上傳
* CSRF
* Clickjacking
### 書面報告
* [書面報告連結](written_report/secpro111_3.pdf)
    * 專案的弱點研究、資料庫設計、系統設計與實作細節皆在此報告中
### DEMO講解影片
| 弱點攻擊講解        | 影片連結                     |
|:------------------- |:---------------------------- |
| 嘉大鞋子-網站導覽   | https://youtu.be/PxRXmFCEB80 |
| Union Attack        | https://youtu.be/s1wS0aHIij4 |
| Blind SQL Injection | https://youtu.be/CbQK_o6gewg |
| DOM XSS             | https://youtu.be/5aBLsF7vhIU |
| XXE Injection       | https://youtu.be/yjcaA1Mwspk |
| 任意檔案上傳        | https://youtu.be/8kQ8YZRyPSw |
| Clickjacking        | https://youtu.be/T1NNvly3Gfc |