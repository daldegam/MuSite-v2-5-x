
/****** Object:  Table [dbo].[webAuctions]    Script Date: 11/01/2011 09:18:12 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
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

SET ANSI_PADDING OFF
GO

