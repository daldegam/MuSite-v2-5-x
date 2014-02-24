

/****** Object:  Table [dbo].[webAuctionsBids]    Script Date: 09/23/2011 17:37:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[webAuctionsBids](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[auction] [int] NOT NULL,
	[amount] [int] NOT NULL,
	[username] [varchar](10) NOT NULL,
	[lastBid] [datetime] NOT NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

