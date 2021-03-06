USE [MuOnline]
GO
/****** Object:  Table [dbo].[ExtWareHouseVirtual]    Script Date: 09/10/2010 12:06:11 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ExtWareHouseVirtual](
	[Number] [bigint] IDENTITY(1,1) NOT NULL,
	[AccountId] [varchar](10) NOT NULL,
	[Item] [varbinary](16) NOT NULL,
	[dbVersion] [tinyint] NOT NULL CONSTRAINT [DF_ExtWareHouseVirtual_dbVersion]  DEFAULT ((0))
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF