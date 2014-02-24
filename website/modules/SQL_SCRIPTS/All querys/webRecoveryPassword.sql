
/****** Object:  Table [dbo].[webRecoveryPassword]    Script Date: 03/10/2012 12:10:51 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[webRecoveryPassword](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[password] [varchar](10) NOT NULL,
	[hash] [varchar](32) NOT NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

