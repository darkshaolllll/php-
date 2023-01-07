import tornado.ioloop
import tornado.web

class Mainhanderslef(tornado.web.RequestHandler):
    def get(self):
        self.write("hello word")
def make_app():
    return tornado.web.Application(
        [(r"/",Mainhanderslef),]
    )
if __name__=="__main__":
    app=make_app()
    app.listen(8888)
    tornado.ioloop.IOLoop.current().start()