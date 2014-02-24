USE [master]
GO
sp_addextendedproc 'XP_MD5_EncodeKeyVal', 'WZ_MD5_MOD.dll'
GO
sp_addextendedproc 'XP_MD5_CheckValue', 'WZ_MD5_MOD.dll'
GO

USE [MuOnline]
GO
ALTER TABLE [dbo].[MEMB_INFO] ADD [resale] BIT DEFAULT 0 NOT NULL
GO
ALTER TABLE [dbo].[MEMB_INFO] ADD [hashActivate] VARCHAR(32) NULL
Go
ALTER TABLE dbo.MEMB_INFO ADD data datetime NULL 
GO
ALTER TABLE dbo.MEMB_INFO ADD aniversario nvarchar(50) NULL 
GO
ALTER TABLE dbo.MEMB_INFO ADD [vip] [smallint] NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.MEMB_INFO ADD [type] [smallint] NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.MEMB_INFO ADD [datebegin] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.MEMB_INFO ADD [dateend] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.MEMB_INFO ADD [dateendinteger] [smallint] NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.MEMB_INFO ADD [amount] [int] NOT NULL DEFAULT 0  
GO
ALTER TABLE dbo.MEMB_INFO ADD [gold] [int] NOT NULL DEFAULT 0  
GO
ALTER TABLE dbo.Character ADD resetsWeek int NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.Character ADD resetsMonth int NOT NULL DEFAULT 0
GO
ALTER TABLE dbo.Character ADD PkCountWeb int NOT NULL DEFAULT 0
GO
ALTER TABLE dbo.Character ADD Resets int NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.Character ADD MResets int NOT NULL DEFAULT 0 
GO
ALTER TABLE dbo.[Character] ADD image varchar(50) NULL
GO
CREATE TABLE [dbo].[ExtWareHouseVirtual](
	[Number] [bigint] IDENTITY(1,1) NOT NULL,
	[AccountId] [varchar](10) NOT NULL,
	[Item] [varbinary](16) NOT NULL,
	[dbVersion] [tinyint] NOT NULL CONSTRAINT [DF_ExtWareHouseVirtual_dbVersion]  DEFAULT ((0))
) ON [PRIMARY]
GO


CREATE TABLE [dbo].[webBanneds](
	[name] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[datebegin] [varchar](10) COLLATE Latin1_General_CI_AS NOT NULL,
	[dateend] [varchar](10) COLLATE Latin1_General_CI_AS NOT NULL,
	[type] [smallint] NOT NULL,
	[description] [varchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
	[bannedBy] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webCash](
	[username] [varchar](12) NOT NULL,
	[amount] [int] NOT NULL DEFAULT ((0)),
	[amount2] [int] NOT NULL DEFAULT ((0))
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webComplaints] (
	[id] [int] IDENTITY (1, 1) NOT NULL ,
	[username] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[image] [varchar] (255) COLLATE Latin1_General_CI_AS NOT NULL ,
	[description] [text] COLLATE Latin1_General_CI_AS NOT NULL ,
	[date] [varchar] (50) COLLATE Latin1_General_CI_AS NOT NULL ,
	[ip] [varchar] (50) COLLATE Latin1_General_CI_AS NOT NULL ,
	[status] [smallint] NOT NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webLogBuyCash] (
	[id] [int] IDENTITY (1, 1) NOT FOR REPLICATION  NOT NULL ,
	[username] [varchar] (12) COLLATE Chinese_PRC_CI_AS NOT NULL ,
	[cash] [int] NULL ,
	[banco] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[nterminal] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[ntransferencia] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[agencia_acolhedora] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[nsequencia] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[ctr] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[caixa_eletronico] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[nenvelope] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[ndocumento] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[ncontrole] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[noperador] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[data] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[hora] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[pago_em] [varchar] (50) COLLATE Chinese_PRC_CI_AS NULL ,
	[anexo] [varchar] (255) COLLATE Chinese_PRC_CI_AS NULL ,
	[comentario] [text] COLLATE Chinese_PRC_CI_AS NULL ,
	[valor] [varchar] (10) COLLATE Chinese_PRC_CI_AS NULL ,
	[status] [int] NOT NULL ,
	[comentario_adm] [text] COLLATE Chinese_PRC_CI_AS NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webLogBuyVips] (
	[id] [int] IDENTITY (1, 1) NOT NULL ,
	[username] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[type] [smallint] NOT NULL ,
	[cashAmount] [int] NOT NULL ,
	[days] [smallint] NOT NULL ,
	[date] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webNotices] (
	[id] [smallint] IDENTITY (1, 1) NOT NULL ,
	[subject] [varchar] (50) COLLATE Latin1_General_CI_AS NOT NULL ,
	[content] [text] COLLATE Latin1_General_CI_AS NOT NULL ,
	[date] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webPrevilegy] (
	[id] [smallint] IDENTITY (1, 1) NOT NULL ,
	[username] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[previlegy] [smallint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webRecord] (
	[record] [smallint] NOT NULL ,
	[date] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL 
) ON [PRIMARY]
GO

INSERT INTO [dbo].[webRecord] ([record],[date]) VALUES (0,0)
GO

CREATE TABLE [dbo].[webTickets] (
	[id] [int] IDENTITY (1, 1) NOT NULL ,
	[username] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[character] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[sector] [varchar] (20) COLLATE Latin1_General_CI_AS NOT NULL ,
	[subject] [varchar] (30) COLLATE Latin1_General_CI_AS NOT NULL ,
	[description] [text] COLLATE Latin1_General_CI_AS NOT NULL ,
	[date] [varchar] (10) COLLATE Latin1_General_CI_AS NOT NULL ,
	[ip] [varchar] (50) COLLATE Latin1_General_CI_AS NOT NULL ,
	[status] [smallint] NOT NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webTicketsAnswers] (
	[id] [int] NOT NULL ,
	[description] [text] COLLATE Latin1_General_CI_AS NOT NULL ,
	[answerBy] [varchar] (12) COLLATE Latin1_General_CI_AS NOT NULL ,
	[date] [varchar] (50) COLLATE Latin1_General_CI_AS NOT NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webVips](
	[username] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[type] [smallint] NOT NULL,
	[datebegin] [varchar](10) COLLATE Latin1_General_CI_AS NOT NULL,
	[dateend] [varchar](10) COLLATE Latin1_General_CI_AS NOT NULL,
	[dateendinteger] [smallint] NOT NULL CONSTRAINT [DF_webVips_dateendinteger]  DEFAULT ((0))
) ON [PRIMARY]

CREATE TABLE [dbo].[webSendEmailLimit] (
	[username] [varchar] (10) COLLATE Chinese_PRC_CI_AS NOT NULL ,
	[dateRequest] [varchar] (10) COLLATE Chinese_PRC_CI_AS NOT NULL 
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[webSendEmailLimit] WITH NOCHECK ADD 
	CONSTRAINT [PK_webSendEmailLimit] PRIMARY KEY  CLUSTERED 
	(
		[username]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webPollQuestions](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[question] [varchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[active] [bit] NOT NULL CONSTRAINT [DF_webPollQuestions_active]  DEFAULT ((0))
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webPollAnswers](
	[idAnswer] [int] IDENTITY(1,1) NOT NULL,
	[idPoll] [int] NOT NULL,
	[answer] [varchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[votes] [int] NOT NULL CONSTRAINT [DF_webPollAnswers_votes]  DEFAULT ((0))
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webPollIps] (
	[ip] [varchar] (15) COLLATE Chinese_PRC_CI_AS NOT NULL ,
	[requestTime] [varchar] (10) COLLATE Chinese_PRC_CI_AS NOT NULL 
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[webPollIps] WITH NOCHECK ADD 
	CONSTRAINT [PK_webPollIps] PRIMARY KEY  CLUSTERED 
	(
		[ip]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webCronjobConfig](
	[execute] [bit] NOT NULL,
	[lastExecution] [bigint] NOT NULL CONSTRAINT [DF_webCronjobConfig_lastExecution]  DEFAULT ((0))
) ON [PRIMARY]
GO

INSERT INTO [dbo].[webCronjobConfig] ([execute]) VALUES (0);
GO

CREATE TABLE [dbo].[webRankingCharactersLevel](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersLevel] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersLevel] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webRankingCharactersMasterReset](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersMasterReset] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersMasterReset] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webRankingCharactersPk](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersPk] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersPk] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webRankingCharactersResets](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersResets] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersResets] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webRankingCharactersResetsMonth](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersResetsMonth] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersResetsMonth] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webRankingCharactersResetsWeek](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersResetsWeek] WITH NOCHECK ADD 
	CONSTRAINT [PK_webRankingCharactersResetsWeek] PRIMARY KEY  CLUSTERED 
	(
		[account],
		[character]
	)  ON [PRIMARY] 
GO

CREATE TABLE [dbo].[webNoticesComments](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[idNotice] [smallint] NOT NULL,
	[username] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[comment] [text] COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[datePost] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[remoteAddr] [varchar](15) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webScreenshots](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[image] [varchar](50) NOT NULL,
	[uploadBy] [varchar](10) NOT NULL,
	[date] [int] NOT NULL,
	[rate] [tinyint] NOT NULL,
	[legend] [varchar](50) NOT NULL,
	[sw] [smallint] NOT NULL CONSTRAINT [DF_webScreenshots_sw]  DEFAULT ((0)),
	[sy] [smallint] NOT NULL CONSTRAINT [DF_webScreenshots_sy]  DEFAULT ((0)),
	[cw] [smallint] NOT NULL CONSTRAINT [DF_webScreenshots_cw]  DEFAULT ((0)),
	[cy] [smallint] NOT NULL CONSTRAINT [DF_webScreenshots_cy]  DEFAULT ((0))
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webScreenshotsIps](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[login] [varchar](10) NULL,
	[ip] [varchar](15) NOT NULL,
	[timestamp] [int] NOT NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webLdManagerUsers](
	[id] [tinyint] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[password] [varchar](10) NOT NULL,
	[previlegy] [tinyint] NOT NULL CONSTRAINT [DF_webLdManagerUsers_previlegy]  DEFAULT ((0))
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webChatServer](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[dateSay] [datetime] NOT NULL,
	[server] [int] NOT NULL,
	[type] [tinyint] NOT NULL,
	[name] [varchar](10) COLLATE Latin1_General_CI_AS NOT NULL,
	[message] [varchar](255) COLLATE Latin1_General_CI_AS NOT NULL,
	[destiny] [varchar](100) COLLATE Latin1_General_CI_AS NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webGoldenArcher](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[pserial1] [varchar](4) NOT NULL,
	[pserial2] [varchar](4) NOT NULL,
	[pserial3] [varchar](4) NOT NULL,
	[status] [bit] NOT NULL,
	[itemCategorie] [tinyint] NOT NULL,
	[itemIndex] [smallint] NOT NULL,
	[itemLevel] [tinyint] NOT NULL,
	[itemOption] [tinyint] NOT NULL,
	[itemSkill] [bit] NOT NULL,
	[itemLuck] [bit] NOT NULL,
	[excellent1] [bit] NOT NULL,
	[excellent2] [bit] NOT NULL,
	[excellent3] [bit] NOT NULL,
	[excellent4] [bit] NOT NULL,
	[excellent5] [bit] NOT NULL,
	[excellent6] [bit] NOT NULL,
	[ancient] [tinyint] NOT NULL,
	[refine] [bit] NOT NULL,
	[harmonyType] [tinyint] NOT NULL,
	[harmonyLevel] [tinyint] NOT NULL,
	[socketOp1] [smallint] NOT NULL,
	[socketOp2] [smallint] NOT NULL,
	[socketOp3] [smallint] NOT NULL,
	[socketOp4] [smallint] NOT NULL,
	[socketOp5] [smallint] NOT NULL,
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webGoldenArcher] WITH NOCHECK ADD
 CONSTRAINT [PK_webGoldenArcher] PRIMARY KEY CLUSTERED 
 (
	[pserial1] ASC,
	[pserial2] ASC,
	[pserial3] ASC
 ) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webAuctions](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NOT NULL,
	[premium] [varchar](255) NOT NULL,
	[startDate] [int] NOT NULL,
	[endDate] [int] NOT NULL,
	[active] [bit] NOT NULL,
	[minimumBid] [int] NOT NULL,
	[closed] [bit] NOT NULL,
	[winner] [varchar](10) NULL,
	[winnerText] [text] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[webAuctionsBids](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[auction] [int] NOT NULL,
	[amount] [int] NOT NULL,
	[username] [varchar](10) NOT NULL,
	[lastBid] [datetime] NOT NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webRecoveryPassword](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[password] [varchar](10) NOT NULL,
	[hash] [varchar](32) NOT NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[webPasswordBruteForceLock](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[errors] [tinyint] NOT NULL,
	[date] [datetime] NOT NULL
) ON [PRIMARY]
GO


CREATE PROCEDURE [dbo].[webChatServerRemove]
@minutes int
AS
BEGIN
	DELETE FROM [dbo].[webChatServer] WHERE DATEDIFF(minute, [dateSay], getDate()) > @minutes
END
GO

CREATE PROCEDURE [dbo].[webChatServerWrite]
@dateSay datetime,
@server int,
@type tinyint,
@name varchar(10),
@message varchar(255),
@destiny varchar(65)
AS
BEGIN

INSERT INTO [dbo].[webChatServer]
           ([dateSay]
           ,[server]
           ,[type]
           ,[name]
           ,[message]
           ,[destiny])
     VALUES
           (@dateSay
           ,@server
           ,@type
           ,@name
           ,@message
           ,@destiny)

END
GO

CREATE PROCEDURE [dbo].[webPwdHashWrite]
@login VARCHAR(10),
@senha VARCHAR(10)
AS
BEGIN

DECLARE @Hash BINARY(16);
EXEC master..XP_MD5_EncodeKeyVal @senha, @login, @Hash OUT;
UPDATE MuOnline.dbo.MEMB_INFO SET memb__pwd = @Hash WHERE memb___id = @login;

END

GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_CleanVault 
    @AccountID varchar(10),
    @Character varchar(10)
AS
BEGIN
    -- SET NOCOUNT ON added to prevent extra result sets from
    -- interfering with SELECT statements.
    SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_DoubleVault
    @AccountID varchar(10),
    @Character varchar(10)
AS
BEGIN
    -- SET NOCOUNT ON added to prevent extra result sets from
    -- interfering with SELECT statements.
    SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_Reset
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_MasterReset
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_CleanPK
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_DistributePoints
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_MoveCharacter
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_ChargeNick
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_ChargeClass
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_RedistributePoints
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE webPanelAction_CleanInventory
	@AccountID varchar(10),
	@Character varchar(10)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

END
GO




SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO


CREATE PROCEDURE [dbo].[webVerifyLogin]
@login VARCHAR(10),
@senha VARCHAR(10),
@md5 int
AS
BEGIN
DECLARE @Valid int;
SET @Valid = 0;

IF @md5 = 1
BEGIN
	DECLARE @Hash BINARY(16);
	EXEC master..XP_MD5_EncodeKeyVal @senha, @login, @Hash OUT;
	SELECT @Valid = 1 FROM MuOnline.dbo.MEMB_INFO WHERE memb___id = @login AND memb__pwd = @Hash;
END
IF @md5 = 0
BEGIN
	SELECT @Valid = 1 FROM MuOnline.dbo.MEMB_INFO WHERE memb___id = @login AND memb__pwd = @Senha;
END

SELECT @Valid;
END

GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

declare @memb___id varchar(10);
declare c cursor for select memb___id FROM MEMB_INFO
open c
FETCH NEXT FROM c INTO @memb___id
WHILE @@FETCH_STATUS = 0
BEGIN 
	IF NOT EXISTS (SELECT 1 FROM dbo.webCash WHERE username=@memb___id)
		INSERT INTO dbo.webCash (username, amount) VALUES (@memb___id, 0)
 FETCH NEXT FROM c INTO @memb___id
END
CLOSE c
DEALLOCATE c

declare c cursor for select memb___id FROM MEMB_INFO
open c
FETCH NEXT FROM c INTO @memb___id
WHILE @@FETCH_STATUS = 0
BEGIN 
	IF NOT EXISTS (SELECT 1 FROM dbo.webVips WHERE username=@memb___id)
		INSERT INTO dbo.webVips (username, type, dateBegin, dateEnd) VALUES (@memb___id, 0, '0','0')
 FETCH NEXT FROM c INTO @memb___id
END
CLOSE c
DEALLOCATE c

USE [msdb]
GO
/****** Object:  Job [Ranking resetsMonth]    Script Date: 11/25/2009 22:25:57 ******/
BEGIN TRANSACTION
DECLARE @ReturnCode INT
SELECT @ReturnCode = 0
/****** Object:  JobCategory [[Uncategorized (Local)]]]    Script Date: 11/25/2009 22:25:57 ******/
IF NOT EXISTS (SELECT name FROM msdb.dbo.syscategories WHERE name=N'[Uncategorized (Local)]' AND category_class=1)
BEGIN
EXEC @ReturnCode = msdb.dbo.sp_add_category @class=N'JOB', @type=N'LOCAL', @name=N'[Uncategorized (Local)]'
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback

END

DECLARE @jobId BINARY(16)
EXEC @ReturnCode =  msdb.dbo.sp_add_job @job_name=N'Ranking resetsMonth', 
		@enabled=1, 
		@notify_level_eventlog=0, 
		@notify_level_email=0, 
		@notify_level_netsend=0, 
		@notify_level_page=0, 
		@delete_level=0, 
		@description=N'No description available.', 
		@category_name=N'[Uncategorized (Local)]', 
		@owner_login_name=N'sa', @job_id = @jobId OUTPUT
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
/****** Object:  Step [Resetar Coluna]    Script Date: 11/25/2009 22:25:57 ******/
EXEC @ReturnCode = msdb.dbo.sp_add_jobstep @job_id=@jobId, @step_name=N'Resetar Coluna', 
		@step_id=1, 
		@cmdexec_success_code=0, 
		@on_success_action=1, 
		@on_success_step_id=0, 
		@on_fail_action=2, 
		@on_fail_step_id=0, 
		@retry_attempts=0, 
		@retry_interval=0, 
		@os_run_priority=0, @subsystem=N'TSQL', 
		@command=N'UPDATE Character SET resetsMonth = 0', 
		@database_name=N'MuOnline', 
		@flags=0
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_update_job @job_id = @jobId, @start_step_id = 1
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_add_jobschedule @job_id=@jobId, @name=N'Ranking resetsMonth', 
		@enabled=1, 
		@freq_type=16, 
		@freq_interval=1, 
		@freq_subday_type=1, 
		@freq_subday_interval=0, 
		@freq_relative_interval=0, 
		@freq_recurrence_factor=1, 
		@active_start_date=20091125, 
		@active_end_date=99991231, 
		@active_start_time=0, 
		@active_end_time=235959
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_add_jobserver @job_id = @jobId, @server_name = N'(local)'
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
COMMIT TRANSACTION
GOTO EndSave
QuitWithRollback:
	IF (@@TRANCOUNT > 0) ROLLBACK TRANSACTION
EndSave:

USE [msdb]
GO
/****** Object:  Job [Ranking resetsWeek]    Script Date: 11/25/2009 22:25:44 ******/
BEGIN TRANSACTION
DECLARE @ReturnCode INT
SELECT @ReturnCode = 0
/****** Object:  JobCategory [[Uncategorized (Local)]]]    Script Date: 11/25/2009 22:25:44 ******/
IF NOT EXISTS (SELECT name FROM msdb.dbo.syscategories WHERE name=N'[Uncategorized (Local)]' AND category_class=1)
BEGIN
EXEC @ReturnCode = msdb.dbo.sp_add_category @class=N'JOB', @type=N'LOCAL', @name=N'[Uncategorized (Local)]'
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback

END

DECLARE @jobId BINARY(16)
EXEC @ReturnCode =  msdb.dbo.sp_add_job @job_name=N'Ranking resetsWeek', 
		@enabled=1, 
		@notify_level_eventlog=0, 
		@notify_level_email=0, 
		@notify_level_netsend=0, 
		@notify_level_page=0, 
		@delete_level=0, 
		@description=N'No description available.', 
		@category_name=N'[Uncategorized (Local)]', 
		@owner_login_name=N'sa', @job_id = @jobId OUTPUT
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
/****** Object:  Step [Resetar Coluna]    Script Date: 11/25/2009 22:25:44 ******/
EXEC @ReturnCode = msdb.dbo.sp_add_jobstep @job_id=@jobId, @step_name=N'Resetar Coluna', 
		@step_id=1, 
		@cmdexec_success_code=0, 
		@on_success_action=1, 
		@on_success_step_id=0, 
		@on_fail_action=2, 
		@on_fail_step_id=0, 
		@retry_attempts=0, 
		@retry_interval=0, 
		@os_run_priority=0, @subsystem=N'TSQL', 
		@command=N'UPDATE Character SET resetsWeek = 0', 
		@database_name=N'MuOnline', 
		@flags=0
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_update_job @job_id = @jobId, @start_step_id = 1
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_add_jobschedule @job_id=@jobId, @name=N'Ranking resetsWeek', 
		@enabled=1, 
		@freq_type=8, 
		@freq_interval=1, 
		@freq_subday_type=1, 
		@freq_subday_interval=0, 
		@freq_relative_interval=0, 
		@freq_recurrence_factor=1, 
		@active_start_date=20091125, 
		@active_end_date=99991231, 
		@active_start_time=0, 
		@active_end_time=235959
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
EXEC @ReturnCode = msdb.dbo.sp_add_jobserver @job_id = @jobId, @server_name = N'(local)'
IF (@@ERROR <> 0 OR @ReturnCode <> 0) GOTO QuitWithRollback
COMMIT TRANSACTION
GOTO EndSave
QuitWithRollback:
	IF (@@TRANCOUNT > 0) ROLLBACK TRANSACTION
EndSave:

