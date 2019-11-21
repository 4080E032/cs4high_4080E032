#
```
Markdown文件
https://markdown.tw/
```
# 網路硬體

```
Layer-1:repeater(1-1), hub(1-N)
Layer-2:bridgr, switch
Layer-3: router,L3-Switch
Layer-4: L4 switch
Layer-7: L7 switch, proxy
```



# 網路協定:
```
協定(protocol):會定義資料格式、編碼機制、錯誤處理、以及資料在網路上傳輸的順序。
無線射頻辨識 RFID(Radio Frequency IDentification)
近距離無線通訊 NFC（Near-field communication）
```
# 網際層（Internet Layer）[OSI 參考模式的網路層]協定:
```
● IP（Internet Protocol）：網際通訊協定。
● ARP（Address Resolution Protocol）：位址解析協定。
● RARP（Reverse Address Resolution Protocol）：反向位址解析協定。
```
### OSI MODEL
```
OSI Model Explained | OSI Animation | Open System Interconnection Model | OSI 7 layers | TechTerms
https://www.youtube.com/watch?v=vv4y_uOneC0
```

# TCP/IP
### ARP
```
位址解析協定（Address Resolution Protocol, ARP）來查問欲傳送之目的主機的MAC位址==
已知的 IP 位址查問其相對應的網路實體位
反向位址解析協定（Reverse Address Resolution Protocol, RARP）。
由已知的網路實體位址查詢其相對應的 IP 位址
C:\Users\KSUIE>arp/?

顯示和修改位址解析通訊協定 (ARP) 使用的 IP 對
實際位址轉譯表格。

ARP -s inet_addr eth_addr [if_addr]
ARP -d inet_addr [if_addr]
ARP -a [inet_addr] [-N if_addr] [-v]

  -a            質詢目前的通訊協定資料來顯示目前的
                ARP 項目。如果指定 inet_addr，只會顯示指定電腦的
                IP 及實體位址。如果有多個網路介面使用 ARP，便會顯示每個 ARP
                表格的項目。
  -g            與 -a 相同。
  -v            以詳細資訊模式顯示目前的 ARP 項目。將會顯示
                所有無效項目和回路介面上的項目。
  inet_addr     指定網際網路位址。
  -N if_addr    顯示 if_addr 指定之網路介面的 ARP
                項目。
  -d            刪除 inet_addr 指定的主機。使用萬用字元 * 取代 inet_addr
                可刪除所有主機。
  -s            新增主機並將網際網路位址 inet_addr 與實體位址
                eth_addr 相關聯。實體位址是
                6 個以連字號分隔的十六進位位元組。該項目
                永久不變。
  eth_addr      指定實體位址。
  if_addr       如果存在，這會指定介面的網際網路位址，
                應修改此介面的位址轉譯表格。
                如果不存在，將會使用第一個適用的介面。
範例:
  > arp -s 157.55.85.212   00-aa-00-62-c6-09  .... 新增靜態項目。
  > arp -a                                    .... 顯示 ARP 表格。
C:\Users\KSUIE>arp -a

介面: 192.168.56.1 --- 0x5
  網際網路網址          實體位址               類型
  192.168.56.255        ff-ff-ff-ff-ff-ff     靜態
  224.0.0.3             01-00-5e-00-00-03     靜態
  224.0.0.22            01-00-5e-00-00-16     靜態
  224.0.0.251           01-00-5e-00-00-fb     靜態
  224.0.0.252           01-00-5e-00-00-fc     靜態
  239.255.255.250       01-00-5e-7f-ff-fa     靜態

介面: 172.20.155.145 --- 0x9
  網際網路網址          實體位址               類型
  172.20.155.14         88-d7-f6-53-84-b7     動態
  172.20.155.16         88-d7-f6-53-83-c0     動態
  172.20.155.17         88-d7-f6-53-84-b5     動態
  172.20.155.22         88-d7-f6-53-24-ac     動態
  172.20.155.38         88-d7-f6-53-24-9b     動態
  172.20.155.50         88-d7-f6-53-82-e5     動態
  172.20.155.51         88-d7-f6-53-85-b8     動態
  172.20.155.56         38-2c-4a-c6-c6-29     動態
  172.20.155.61         88-d7-f6-53-84-19     動態
  172.20.155.63         00-e0-4c-36-1a-8a     動態
  172.20.155.71         88-d7-f6-53-84-7d     動態
  172.20.155.83         38-2c-4a-c6-c4-e6     動態
  172.20.155.88         88-d7-f6-53-85-75     動態
  172.20.155.90         88-d7-f6-53-24-a8     動態
  172.20.155.97         88-d7-f6-53-83-4a     動態
  172.20.155.100        88-d7-f6-53-83-98     動態
  172.20.155.101        38-2c-4a-c6-c2-a5     動態
  172.20.155.102        70-4d-7b-a3-4c-d4     動態
  172.20.155.126        88-d7-f6-53-83-f7     動態
  172.20.155.153        88-d7-f6-53-24-87     動態
  172.20.155.157        70-4d-7b-a3-4d-68     動態
  172.20.155.162        88-d7-f6-53-24-eb     動態
  172.20.155.171        88-d7-f6-53-23-a0     動態
  172.20.155.177        70-4d-7b-a3-4d-b6     動態
  172.20.155.178        38-2c-4a-c6-c2-e6     動態
  172.20.155.181        88-d7-f6-53-25-25     動態
  172.20.155.182        88-d7-f6-53-85-74     動態
  172.20.155.184        d0-17-c2-af-5e-b4     動態
  172.20.155.193        88-d7-f6-53-83-ea     動態
  172.20.155.201        88-d7-f6-53-85-d5     動態
  172.20.155.216        88-d7-f6-53-83-0d     動態
  172.20.155.230        88-d7-f6-53-85-c3     動態
  172.20.155.231        88-d7-f6-53-85-a5     動態
  172.20.155.232        88-d7-f6-53-24-7b     動態
  172.20.155.254        00-14-1b-72-a8-00     動態
  172.20.155.255        ff-ff-ff-ff-ff-ff     靜態
  224.0.0.3             01-00-5e-00-00-03     靜態
  224.0.0.22            01-00-5e-00-00-16     靜態
  224.0.0.251           01-00-5e-00-00-fb     靜態
  224.0.0.252           01-00-5e-00-00-fc     靜態
  239.255.64.75         01-00-5e-7f-40-4b     靜態
  239.255.255.250       01-00-5e-7f-ff-fa     靜態
  255.255.255.255       ff-ff-ff-ff-ff-ff     靜態

介面: 192.168.173.2 --- 0xe
  網際網路網址          實體位址               類型
  192.168.173.255       ff-ff-ff-ff-ff-ff     靜態
  224.0.0.3             01-00-5e-00-00-03     靜態
  224.0.0.22            01-00-5e-00-00-16     靜態
  224.0.0.251           01-00-5e-00-00-fb     靜態
  224.0.0.252           01-00-5e-00-00-fc     靜態
  239.255.255.250       01-00-5e-7f-ff-fa     靜態
```

### IEEE 802
```
https://zh.wikipedia.org/wiki/IEEE_802
```
```
IEEE 802中定義的服務和協定限定在OSI模型的最低兩層（即實體層和資料鏈路層）。

IEEE 802將OSI的資料鏈路層分為兩個子層:

Layer-2: 資料鏈路層===>  邏輯鏈路控制（LLC, Logical Link Control）
                媒介存取控制（MAC, Media Access Control）
Layer-1: 實體層
```
```
IEEE 802.1：高層區域網路協定（Bridging (networking) and Network Management）
IEEE 802.2：邏輯鏈路控制（Logical link control）

區域網路用的協定:
[超級重要]IEEE 802.3：乙太網路（Ethernet）:標準集中在OSI模型中的實體層和MAC子層，
而且僅針對於乙太網路的「有線」傳輸。除了區域網路採用這方面的連線技術規格，在廣域網路裡面
，也應用部分的技術標準
IEEE 802.4：權杖匯流排（Token bus）
IEEE 802.5：權杖環（Token-Ring）


IEEE 802.6：城域網（MAN, Metropolitan Area Network）
IEEE 802.7：寬頻TAG（Broadband LAN using Coaxial Cable）
IEEE 802.8：光纖分散式資料介面（FDDI）
IEEE 802.9：綜合業務區域網路（Integrated Services LAN）
IEEE 802.10：區域網路網路安全（Interoperable LAN Security）
[超級重要]IEEE 802.11：無線區域網路（Wireless LAN & Mesh）:主要以5GHz及2.4GHz兩個無線電頻率，
讓兩臺電腦或端點，彼此間發送電波以傳輸資料，建立區域網路或廣域網路的技術。
IEEE 802.12：需求優先級（Demand priority）
IEEE 802.13：（未使用）
IEEE 802.14：電纜數據機（Cable modems）
IEEE 802.15：無線個人區域網路（Wireless PAN）
   IEEE 802.15.1：無線個人區域網路絡（WPAN, Wireless Personal Area Network）
   IEEE 802.15.4：低速無線個人區域網路絡（LR-WPAN, Low Rate Wireless Personal Area Network）
IEEE 802.16：寬頻無線接入（Broadband Wireless Access）
IEEE 802.17：彈性封包環傳輸技術（Resilient packet ring）
IEEE 802.18：無線電管制技術（Radio Regulatory TAG）
IEEE 802.19：共存標籤（Coexistence TAG）
IEEE 802.20：移動寬頻無線接入（Mobile Broadband Wireless Access）
IEEE 802.21：媒介獨立換手（Media Independent Handover）
IEEE 802.22：無線區域網（Wireless Regional Area Network）
IEEE 802.23：緊急服務工作群組（Emergency Services Working Group），2010年3月新發布
```
### ARP
```
Address Resolution Protocol (ARP) - Explained with example | Computer network | TechTerms
https://www.youtube.com/watch?v=EC1slXCT3bg

MAC Address
```
### ICMP
```
Internet Control Message Protocol
```
#### ICMP Message Format封包格式:

![ICMP 封包格式](icmp_header.gif)
```
ICMP 封包格式，其各欄位功能如下：
● 訊息型態（Message Type）：表示該 ICMP 所欲控制之訊息型態，共有 13 種型態，訊息型態之型態代表值如表 5-2 所示。
● 編碼（Code）：對各種訊息型態進一步說明工作內容。
● 檢查集檢查碼（Checksum）：對該封包檢查集錯誤偵測。
● 訊息說明（Message description）：依照不同的控制訊息，而有不同的說明方式。
```
#### Message Type
```
    ICMP 訊息功能

[重要]0  Echo Reply（回應答覆）
[重要]3  Destination Unreachable（目的地無法到達）

4 Source Quench（來源抑制）

[重要]5 Redirect（改變傳輸路徑）

[重要]8 Echo Request（回應要求）

9 Router Advertisement（路由器宣傳）
10 Router Solicitation（路由器懇請）
11 Time Exceeded for a Datagram（溢時傳輸）
12 Parameter Problem on a Datagram（參數問題）
13 Timestamp Request（時間標籤要求）
14 Timestamp Reply（時間標籤回覆）
15 Information Request（資訊要求）（停用）
16 Information Reply（資訊回覆）（停用）
17 Address Mask Request（位址遮罩要求）
18 Address Mask Reply（位址遮罩回覆）
```
### ICMP Destination Unreachable『回聲要求』（Echo Request）（Type 8）『回聲回應』（Echo Replay）（Type 0）
```
![ICMP 封裝](icmp_encap.gif)
```
### ICMP Destination Unreachable（目的地無法到達，Type 3）
```
![ICMP 封裝](icmp_encap.gif)
0: Network Unreachable（無法到達目的網路）
1: Host Unreachable（無法到達目的主機）
2: Protocol Unreachable（通訊協定不存在）
3: Port Unreachable（無法到達連接埠）
4: Fragmentation Needed and DF set（資料需分割並設定不可分割位元）
5: Source Route Failed（來源路徑選擇失敗）
6: Destination Network Unknown（無法識別目的地網路）
7: Destination Host Unknown（無法識別目的地主機）
8: Source Host Isolated（來源主機被隔離）
9: Communication with Destination Network Administratively Prohibited（管理上禁止和目的地網路通訊）
10: Communication with Destination Host Administratively Prohibited（管理上禁止和目的地主機通訊）
11: Network Unreachable for Type of Service（無法到達此型態的網路服務）
12: Host Unreachable for Type of Service（無法到達此型態的主機服務）
```
### 用ICMP Redirect （改變傳輸路徑，Type 5）
![ICMP 封裝](icmp_encap.gif)
```
0: Redirect Datagram for the Net（網路變更而轉向）

1: Redirect Datagram for the Host（主機變更而轉向）

2: Redirect Datagram for the Type of Service and Net（網路和服務型態變更而轉向）

3: Redirect Datagram for the Type of Service and Host（主機和服務型態變更而轉向）
```
### ICMP 封裝

![ICMP 封裝](icmp_encap.gif)

### ICMP 常用指令
```
ping 
tracert| Traceroute
在上限 30 個躍點上
追蹤 www.ksu.edu.tw [120.114.100.65] 的路由:

  1    <1 ms     1 ms    <1 ms  172.20.155.254
  2    <1 ms    <1 ms    <1 ms  120-114-50-230.ksu.edu.tw [120.114.50.230]
  3    <1 ms    <1 ms    <1 ms  www.ksu.edu.tw [120.114.100.65]

追蹤完成。
```
```
tracert www.pchome.com.tw

在上限 30 個躍點上 Tracing route to 11.1.0.1 over a maximum of 30 hops
追蹤 www.pchome.com.tw [210.59.230.39] 的路由:

  1    <1 ms    <1 ms    <1 ms  172.20.155.254
  2    <1 ms    <1 ms    <1 ms 172.16.190.253
  3     1 ms     1 ms     1 ms  120-114-151-14.ksu.edu.tw [120.114.151.14]
  4     *        *        *     要求等候逾時。
  5     *        *        *     要求等候逾時。
  6     *        *        *     要求等候逾時。
  7     *        *        *     要求等候逾時。
```
### TCP vs UDP 
```
TCP(Transmission Control Protocol):是一種連接導向的、可靠的、基於位元組流的傳輸層通信協定，由IETF的RFC 793定義。在簡化的電腦網路OSI模型中，它完成第四層傳輸層所指定的功能。用戶資料報協定（UDP）是同一層內另一個重要的傳輸協定。
UDP(User Datagram Protocol):只提供資料的不可靠傳遞，它一旦把應用程式發給網路層的資料傳送出去就不保留資料備份，
UDP在IP資料報的頭部僅僅加入了復用和資料校驗欄位。
```
### TCP封包結構
```
![ICMP 封裝](icmp_encap.gif)
來源連接埠（16位元長）－辨識傳送連接埠
目的連接埠（16位元長）－辨識接收連接埠
序列號（seq，32位元長）
如果含有同步化旗標（SYN），則此為最初的序列號；第一個資料位元的序列碼為本序列號加一。
如果沒有同步化旗標（SYN），則此為第一個資料位元的序列碼。
確認號（ack，32位元長）—期望收到的資料的開始序列號。也即已經收到的資料的位元組長度加1。
資料偏移（4位元長）—以4位元組為單位計算出的資料段開始位址的偏移值。
保留（3位元長）—須置0
標誌符（9位元長）
NS—ECN-nonce。
CWR—Congestion Window Reduced。
ECE—ECN-Echo有兩種意思，取決於SYN標誌的值。
URG—為1表示高優先級封包，緊急指標欄位有效。
ACK—為1表示確認號欄位有效
PSH—為1表示是帶有PUSH標誌的資料，指示接收方應該儘快將這個報文段交給應用層而不用等待緩衝區裝滿。
RST—為1表示出現嚴重差錯。可能需要重新建立TCP連接。還可以用於拒絕非法的報文段和拒絕連接請求。
SYN—為1表示這是連接請求或是連接接受請求，用於建立連接和使順序號同步
FIN—為1表示傳送方沒有資料要傳輸了，要求釋放連接。
窗口（WIN，16位元長）—表示從確認號開始，本報文的傳送方可以接收的位元組數，即接收窗口大小。用於流量控制。
校驗和（Checksum，16位元長）—對整個的TCP報文段，包括TCP頭部和TCP資料，以16位元字進行計算所得。這是一個強制性的欄位。
緊急指標（16位元長）—本報文段中的緊急資料的最後一個位元組的序號。
選項欄位—最多40位元組。每個選項的開始是1位元組的kind欄位，說明選項的類型。
0：選項表結束（1位元組）
1：無操作（1位元組）用於選項欄位之間的字邊界對齊。
2：最大報文段長度（4位元組，Maximum Segment Size，MSS）通常在建立連接而設定SYN標誌的封包中指明這個選項，指明本端所能接收的最大長度的報文段。通常將MSS設定為（MTU-40）位元組，攜帶TCP報文段的IP資料報的長度就不會超過MTU（MTU最大長度為1518位元組，最短為64位元組），從而避免本機發生IP分片。只能出現在同步報文段中，否則將被忽略。
3：窗口擴大因子（4位元組，wscale），取值0-14。用來把TCP的窗口的值左移的位數，使窗口值乘倍。只能出現在同步報文段中，否則將被忽略。這是因為現在的TCP接收資料緩衝區（接收窗口）的長度通常大於65535位元組。
4：sackOK—傳送端支援並同意使用SACK選項。
5：SACK實際工作的選項。
8：時間戳（10位元組，TCP Timestamps Option，TSopt）
傳送端的時間戳（Timestamp Value field，TSval，4位元組）
時間戳回顯應答（Timestamp Echo Reply field，TSecr，4位元組）
```
### UDP的分組結構
```
![ICMP 封裝](icmp_encap.gif)
UDP報頭包括4個欄位，每個欄位占用2個位元組（即16個位元）。在IPv4中，「來源連接埠」和「校驗和」是可選欄位（以粉色背景標出）。在IPv6中，只有來源連接埠是可選欄位。 各16bit的來源埠和目的埠用來標記傳送和接受的應用行程。因為UDP不需要應答，所以來源埠是可選的，如果來源埠不用，那麼置為零。在目的埠後面是長度固定的以位元組為單位的長度域，用來指定UDP資料報包括資料部分的長度，長度最小值為8byte。首部剩下地16bit是用來對首部和資料部分一起做校驗和（Checksum）的，這部分是可選的，但在實際應用中一般都使用這一功能。

封包長度
該欄位指定UDP報頭和資料總共占用的長度。可能的最小長度是8位元組，因為UDP報頭已經占用了8位元組。由於這個欄位的存在，UDP報文總長不可能超過65535位元組（包括8位元組的報頭，和65527位元組的資料）。實際上通過IPv4協定傳輸時，由於IPv4的頭部資訊要占用20位元組，因此資料長度不可能超過65507位元組（65,535 − 8位元組UDP報頭 − 20位元組IP頭部）。
在IPv6的jumbogram中，是有可能傳輸超過65535位元組的UDP封包的。依據RFC 2675，如果這種情況發生，報文長度應被填寫為0。
校驗和
校驗和欄位可以用於發現頭部資訊和資料中的傳輸錯誤。該欄位在IPv4中是可選的，在IPv6中則是強制的。如果不使用校驗和，該欄位應被填充為全0。
```


### SSL, TLS, HTTP, HTTPS 
```
SSL, TLS, HTTP, HTTPS Explained
https://www.youtube.com/watch?v=hExRDVZHhig
```

###  Proxy Server
```
What is a Proxy Server?
https://www.youtube.com/watch?v=5cPIukqXe5w
```

### FTP (File Transfer Protocol), SFTP, TFTP Explained.
```
FTP (File Transfer Protocol), SFTP, TFTP Explained.
https://www.youtube.com/watch?v=tOj8MSEIbfA
```

### DNS
```

```

### DNS
```

```

### DNS
```

```


